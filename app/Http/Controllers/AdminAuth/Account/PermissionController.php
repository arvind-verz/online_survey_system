<?php

namespace App\Http\Controllers\AdminAuth\Account;

use App\Http\Controllers\Controller;
use App\PermissionAccess;
use App\Role;
use Auth;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->module_name = 'ROLES_AND_PERMISSION';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'views');

        $roles = Role::all();

        return view('admin.account.roles-and-permission', [
            'page_title' => 'Roles and Permission',
            'roles'      => $roles,
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
        //is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'edits');

        return view('admin.account.edit-roles-and-permission', [
            'page_title' => 'Edit',
            'id'         => $id,
            'modules'    => get_modules(),
            'role_id'    => $id,
        ]);
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
        foreach ($request->module as $module) {
            $permission = PermissionAccess::where(['role_id'    =>  $id, 'module'   =>  $module])->first();
            $has_permission = PermissionAccess::where(['role_id'    =>  $id, 'module'   =>  $module])->get();
            if(!$has_permission->count()) {
                $permission = new PermissionAccess;
                $permission->role_id = $id;
            }
            $permission->module  = $module['name'][0];
            $permission->views   = $module['view'][0];
            $permission->creates = $module['create'][0];
            $permission->edits   = $module['edit'][0];
            $permission->deletes = $module['delete'][0];
            $permission->save();
        }
        return back()->with('success', config('constant.roles_and_permission') . __('messages.updated'));
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

    public function access_not_allowed()
    {
        return view('admin.account.access-not-allowed', [
            'page_title' => 'Access Rights',
        ]);
    }
}
