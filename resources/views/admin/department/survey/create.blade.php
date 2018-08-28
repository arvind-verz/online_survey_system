@extends('admin.layout.auth')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('create_pages') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header text-right">
                        <a class="btn btn-warning" href="{{ url('/admin/sales') }}">
                            Back
                        </a>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form">
                            <div class="form-group">
                                <label>
                                    Name
                                </label>
                                <input class="form-control" placeholder="Enter name" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" placeholder="Enter email" type="email">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Password
                                </label>
                                <input class="form-control" placeholder="Enter password" type="password">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Confirm Password
                                </label>
                                <input class="form-control" placeholder="Confirm password" type="password">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Is Admin?
                                </label>
                                <input name="is_admin" type="checkbox">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Active
                                </label>
                                <input name="is_admin" type="checkbox">
                                </input>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i aria-hidden="true" class="fa fa-floppy-o">
                                    </i>
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
