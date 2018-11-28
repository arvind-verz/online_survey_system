@extends('admin.layout.auth')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $page_title . ' #' . $user->unique_id }}
        </h1>
        {{ Breadcrumbs::render('edit_department', $department, 'user') }}
    </section>
    @include('admin.include.status')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    {!! Form::open(['url' => url('/admin/' . $department . '/users/update', ['id'  =>  $user->unique_id]), 'id'    =>  'users']) !!}
                    <div class="box-body">
                        <!-- form start -->
                        <div class="form-group">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name" placeholder="Enter name" type="text" value="{{ $user->name }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Email
                            </label>
                            <input class="form-control" name="email" placeholder="Enter email" type="email" value="{{ $user->email }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Password
                            </label>
                            <input class="form-control" name="password" placeholder="Enter password" type="password">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Confirm Password
                            </label>
                            <input class="form-control" name="confirm_password" placeholder="Confirm password" type="password">
                            </input>
                        </div>
                        @if(Auth::user()->is_admin==1)
                        <div class="form-group">
                            <label>
                                Is Admin?
                            </label>
                            <input class="flat-green" name="is_admin" type="checkbox" value="1" @if($user->is_admin==1) checked @endif>
                            </input>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>
                                Active
                            </label>
                            <input class="flat-green" name="is_active" type="checkbox" value="1" @if($user->is_active==1) checked @endif>
                            </input>
                        </div>
                        <!-- /.box-body -->
                        
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{ url('/admin/' . $department . '/users') }}">
                            Cancel
                        </a>
                        <button class="btn btn-primary pull-right" type="submit">
                        <i aria-hidden="true" class="fa fa-floppy-o">
                        </i>
                        Submit
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection