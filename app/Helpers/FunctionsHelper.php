<?php

use App\PermissionAccess;
use App\Survey;
use App\Admin;
use App\Page;
use Illuminate\Support\Facades\Redirect;

if (!function_exists('get_survey_status')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function get_survey_status($customer_id)
    {
        $status_list = ['Sent', 'Complete'];
        $survey      = Survey::where('customer_id', $customer_id)->first();
        if ($survey) {
            return $status_list[($survey->status - 1)];
        }
        return "-";
    }

    function get_slug_array()
    {
        $slug_list = [];
        $slugs = Page::where('display', 1)->orderBy('ordering', 'asc')->get();
        foreach($slugs as $slug)
        {
            $slug_list[] = $slug->slug;
        }

        return $slug_list;
    }

    function get_modules()
    {
        $modules_array = [
            'DASHBOARD', 'USERS', 'CUSTOMERS', 'SURVEY', 'ROLES_AND_PERMISSION', 'PAGES'
        ];

        return $modules_array;
    }

    function get_permission_access_value($type, $module, $value, $role_id)
    {
        $permission_access = PermissionAccess::where(['role_id' => $role_id, $type => $value, 'module' => $module])->get();
        if ($permission_access->count()) {
            return 'checked';
        }
    }

    function is_permission_allowed($permission_id, $module, $type)
    {
        $permission_access = PermissionAccess::join('admins', 'permission_access.role_id', '=', 'admins.is_admin')
            ->where(['permission_access.role_id' =>  $permission_id, 'permission_access.module' =>  $module, $type  =>  1])
            ->get();
        if(!$permission_access->count()) {
            abort(redirect('admin/access-not-allowed'));
        }
    }

    function get_admin_type($is_admin)
    {
        $admin_type_array = ['Super Admin', 'Deparment Admin', 'Staff'];
        return $admin_type_array[($is_admin-1)];
    }

    function get_pagename_by_slug($slug)
    {
        $slug = Page::where('slug', $slug)->first();
        return $slug->title;
    }
}
