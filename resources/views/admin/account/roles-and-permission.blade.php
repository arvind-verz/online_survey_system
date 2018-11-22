@extends('admin.layout.auth')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('roles-and-permission') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-striped table-bordered text-center" id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Role Name</th>
                                    <th>Modules</th>
                                    <th>Role Access</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($roles->count())
                                @foreach($roles as $role)
                                <tr>
                                    <td>
                                        {{ isset($role->name) ? $role->name : '' }}
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/roles-and-permission/edit/' . $role->id) }}" class="btn btn-primary btn-sm" title="Edit">
                                            <i aria-hidden="true" class="fa fa-pencil-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">
                        <i aria-hidden="true" class="fa fa-floppy-o">
                        </i>
                        Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.row (main row) -->
<!-- /.content -->
<!-- /.content-wrapper -->
@endsection