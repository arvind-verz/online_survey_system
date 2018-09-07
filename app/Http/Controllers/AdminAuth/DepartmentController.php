<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users($department)
    {
        $users = User::where('department', $department)->get();
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
            'page_title' => 'Add User',
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
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user             = new User;
        $user->unique_id  = uniqid();
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = bcrypt($request->password);
        $user->is_admin   = isset($request->is_admin) ? $request->is_admin : 0;
        $user->is_active  = isset($request->is_active) ? $request->is_active : 0;
        $user->department = $department;
        $user->save();

        return back()->with('success', 'User' . __('constant.SUCCESS'));
    }

    public function edit_users($department, $id)
    {
        $user = User::where('unique_id', $id)->first();
        return view('admin.department.users.edit', [
            'page_title' => 'Edit User',
            'department' => $department,
            'user'       => $user,
        ]);
    }

    public function update_users(Request $request, $department, $id)
    {
        $user      = User::where('unique_id', $id)->first();
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
            return back()
                ->withErrors($validator)
                ->withInput();
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

        return back()->with('success', 'User' . __('constant.UPDATED'));
    }

    public function customers($department)
    {

        return view('admin.department.customers.index', [
            'page_title' => 'Customers',
            'department' => $department,
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
            'page_title' => 'Add Customer',
            'department' => $department,
        ]);
    }

    public function edit_customers($department)
    {
        return view('admin.department.customers.edit', [
            'page_title' => 'Edit Customer',
            'department' => $department,
        ]);
    }

    public function survey($department)
    {
        return view('admin.department.survey.index', [
            'page_title' => 'Survey',
            'department' => $department,
        ]);
    }

    public function view_survey($department)
    {
        return view('admin.department.survey.view', [
            'page_title' => 'View Survey',
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