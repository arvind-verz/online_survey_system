<?php

namespace App\Http\Controllers\AdminAuth;

use App\Admin;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Survey;
use Auth;
use Illuminate\Http\Request;
use Validator;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->unique_id = 'verz_' . uniqid();
        $this->survey_id = 'survey_' . uniqid();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users($department)
    {
        if(Auth::user()->id==1)
        {
            $users = Admin::where(['department'  => $department])->get();
        }
        else
        {
            $users = Admin::where(['department'  => $department, 'added_by' => Auth::user()->id])->where('id', '!=', 1)->get();
        }
        return view('admin.department.users.index', [
            'page_title' => 'Users',
            'department' => $department,
            'users'      => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_users($department)
    {
        return view('admin.department.users.create', [
            'page_title' => 'Create',
            'department' => $department,
        ]);
    }

    public function store_users(Request $request, $department)
    {
        $validator = Validator::make($request->all(), [
            'name'             => 'required|max:255',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'min:6',
            'confirm_password' => 'required_with:password|same:password',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user             = new Admin;
        $user->unique_id  = $this->unique_id;
        $user->department = $department;
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = bcrypt($request->password);
        $user->is_admin   = isset($request->is_admin) ? $request->is_admin : 0;
        $user->is_active  = isset($request->is_active) ? $request->is_active : 0;
        $user->added_by   = Auth::user()->id;
        $user->save();

        return back()->with('success', config('constant.user') . __('messages.created'));
    }

    public function edit_users($department, $id)
    {
        $user = Admin::where('unique_id', $id)->first();
        return view('admin.department.users.edit', [
            'page_title' => 'Edit',
            'department' => $department,
            'user'       => $user,
        ]);
    }

    public function update_users(Request $request, $department, $id)
    {
        $user      = Admin::where('unique_id', $id)->first();
        $validator = Validator::make($request->all(), [
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        if (!empty($request->password)) {
            $validator = Validator::make($request->all(), [
                'password'         => 'min:6',
                'confirm_password' => 'required_if:password,|required_with:password|same:password',
            ]);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->is_admin   = isset($request->is_admin) ? $request->is_admin : 0;
        $user->is_active  = isset($request->is_active) ? $request->is_active : 0;
        $user->department = $department;
        $user->save();

        return back()->with('success', config('constant.user') . __('messages.updated'));
    }

    public function customers($department)
    {
        if(Auth::user()->id==1)
        {
            $customers = Customer::where('department', $department)->get();
        }
        else
        {
            $customers = Customer::where(['department'  => $department, 'added_by'  => Auth::user()->id])->get();
        }
        return view('admin.department.customers.index', [
            'page_title' => 'Customers',
            'department' => $department,
            'customers'  => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_customers($department)
    {
        return view('admin.department.customers.create', [
            'page_title' => 'Create',
            'department' => $department,
        ]);
    }

    public function store_customers(Request $request, $department)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $customer                   = new Customer;
        $customer->unique_id        = $this->unique_id;
        $customer->department       = $department;
        $customer->company_name     = $request->company_name;
        $customer->firstname        = $request->firstname;
        $customer->lastname         = $request->lastname;
        $customer->email            = $request->email;
        $customer->appointment_date = $request->appointment_date;
        $customer->added_by         = Auth::id();
        $customer->save();

        if ($request->send_survey == 1) {
            $survey              = new Survey;
            $survey->unique_id   = $this->survey_id;
            $survey->customer_id = $this->unique_id;
            $survey->status      = 1;
            $survey->save();
        }

        return back()->with('success', config('constant.customer') . __('messages.created'));
    }

    public function edit_customers($department, $id)
    {
        $customer = Customer::where('unique_id', $id)->first();
        return view('admin.department.customers.edit', [
            'page_title' => 'Edit',
            'department' => $department,
            'customer'   => $customer,
        ]);
    }

    public function update_customers(Request $request, $department, $id)
    {
        $customer  = Customer::where('unique_id', $id)->first();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:customers,email,' . $customer->id,
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $customer->company_name     = $request->company_name;
        $customer->firstname        = $request->firstname;
        $customer->lastname         = $request->lastname;
        $customer->email            = $request->email;
        $customer->appointment_date = $request->appointment_date;
        $customer->save();

        $survey = Survey::where('customer_id', $id)->count();
        if (!$survey) {
            $survey              = new Survey;
            $survey->unique_id   = $this->survey_id;
            $survey->customer_id = $id;
            $survey->status      = 1;
            $survey->save();
        }

        return back()->with('success', config('constant.customer') . __('messages.updated'));
    }

    public function survey($department)
    {
        if(Auth::user()->id==1)
        {
            $surveys = Survey::join('customers', 'surveys.customer_id', '=', 'customers.unique_id')->where('customers.department', $department)->get();
        }
        else
        {
            $surveys = Survey::join('customers', 'surveys.customer_id', '=', 'customers.unique_id')->where(['customers.department'  => $department, 'customers.added_by'  => Auth::user()->id])->get();
        }
        return view('admin.department.survey.index', [
            'page_title' => 'Survey',
            'department' => $department,
            'surveys'    =>  $surveys,
        ]);
    }

    public function view_survey($department)
    {
        

        return view('admin.department.survey.view', [
            'page_title' => 'View',
            'department' => $department,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
