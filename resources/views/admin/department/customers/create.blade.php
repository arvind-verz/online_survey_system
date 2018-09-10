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
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header text-right">
                        <a class="btn btn-warning" href="{{ url('/admin/' . $department . '/customers') }}">
                            <i aria-hidden="true" class="fa fa-long-arrow-left">
                            </i>
                            Back
                        </a>
                    </div>
                    <div class="box-body">
                        @include('admin.include.status')
                        <!-- form start -->
                        {!! Form::open(['url' => url('/admin/' . $department . '/customers/store'), 'id'    =>  'customers', 'method'   =>  'POST']) !!}
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
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i aria-hidden="true" class="fa fa-floppy-o">
                                    </i>
                                    Submit
                                </button>
                            </div>
                        {!! Form::close() !!}
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
