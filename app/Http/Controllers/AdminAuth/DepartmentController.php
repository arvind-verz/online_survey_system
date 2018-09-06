<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.department.users.index', [
            'page_title'    =>  'Users',
            'department'    =>  $department
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
            'page_title'    =>  'Add User',
            'department'    =>  $department
        ]);
    }

    public function edit_users($department)
    {
        return view('admin.department.users.edit', [
            'page_title'    =>  'Edit User',
            'department'    =>  $department
        ]);
    }

    public function customers($department)
    {
        return view('admin.department.customers.index', [
            'page_title'    =>  'Customers',
            'department'    =>  $department
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
            'page_title'    =>  'Add Customer',
            'department'    =>  $department
        ]);
    }

    public function edit_customers($department)
    {
        return view('admin.department.customers.edit', [
            'page_title'    =>  'Edit Customer',
            'department'    =>  $department
        ]);
    }

    public function survey($department)
    {
        return view('admin.department.survey.index', [
            'page_title'    =>  'Survey',
            'department'    =>  $department
        ]);
    }

    public function view_survey($department)
    {
        return view('admin.department.survey.view', [
            'page_title'    =>  'View Survey',
            'department'    =>  $department
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
