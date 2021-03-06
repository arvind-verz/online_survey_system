@extends('admin.layout.auth')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('create_department', $department, 'customer') }}
    </section>
    @include('admin.include.status')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    {!! Form::open(['url' => url('/admin/' . $department . '/customers/store'), 'id'    =>  'customers']) !!}
                    <div class="box-body">
                        <!-- form start -->
                        <div class="form-group">
                            <label>
                                Company Name
                            </label>
                            <input class="form-control" name="company_name" placeholder="Enter company name" type="text" value="{{ old('company_name') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                First Name
                            </label>
                            <input class="form-control" name="firstname" placeholder="Enter first name" type="text" value="{{ old('firstname') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Last Name
                            </label>
                            <input class="form-control" name="lastname" placeholder="Enter last name" type="text" value="{{ old('lastname') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Email
                            </label>
                            <input class="form-control" name="email" placeholder="Enter email" type="email" value="{{ old('email') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Appointment Date
                            </label>
                            <input class="form-control datepicker" name="appointment_date" placeholder="Enter date" type="text" value="{{ date('Y-m-d') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Send Survey
                            </label>
                            <select class="form-control" name="send_survey">
                                <option value="1" selected="selected">
                                    Yes
                                </option>
                                <option value="0">
                                    No
                                </option>
                            </select>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{ url('/admin/' . $department . '/customers') }}">
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