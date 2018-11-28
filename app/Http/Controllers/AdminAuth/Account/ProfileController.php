<?php

namespace App\Http\Controllers\AdminAuth\Account;

use App\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Validator;

class ProfileController extends Controller
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
    public function index()
    {
        return view('admin.account.profile', [
            'page_title' => 'Profile',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function update_user_details(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin        = Admin::find(Auth::user()->id);
        $admin->name  = $request->name;
        $admin->email = $request->email;
        $admin->save();

        return redirect()->back()->with('success', config('constant.profile') . __('messages.updated'));
    }

    public function update_user_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password'     => 'required',
            'password'         => 'min:6',
            'confirm_password' => 'required_with:password|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = Admin::find(Auth::user()->id);
        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->with('error', __('messages.password_not_match'));
        }

        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->back()->with('success', config('constant.password') . __('messages.updated'));
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

    public function verification($verz_id)
    {
        $user              = Admin::where('unique_id', $verz_id)->first();
        if($user->is_verified==1)
        {
            return abort(404);
        }
        $user->is_verified = 1;
        $user->save();
        if($user)
        {
            return view('admin.extra.thank-you', [
                'page_title' =>  'Thank You',
                'login_url' =>  url('admin/login'),
            ]);    
        }

    }
}
