@extends('admin.layout.auth')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('profile') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        User Details
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name" placeholder="Your name" type="text" value="{{ isset(Auth::user()->name) ? Auth::user()->name : old('name') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Email
                            </label>
                            <input class="form-control" name="email" placeholder="Your email" type="email" value="{{ isset(Auth::user()->email) ? Auth::user()->email : old('email') }}">
                            </input>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">
                            <i aria-hidden="true" class="fa fa-floppy-o">
                            </i>
                            Save
                        </button>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        Change Password
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>
                                Old Password
                            </label>
                            <input class="form-control" name="old_password" placeholder="Enter old password" type="password">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                New Password
                            </label>
                            <input class="form-control" name="password" placeholder="Enter new password" type="password">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Confirm Password
                            </label>
                            <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password">
                            </input>
                        </div>
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
