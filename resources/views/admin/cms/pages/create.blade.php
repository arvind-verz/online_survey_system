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
                        <a class="btn btn-warning" href="{{ url('/admin/cms/pages') }}">
                            Back
                        </a>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        Title/Subtitle/Content/Slug/Display/
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        Email address
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">
                                        Password
                                    </label>
                                    <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">
                                        File input
                                    </label>
                                    <input id="exampleInputFile" type="file">
                                        <p class="help-block">
                                            Example block-level help text here.
                                        </p>
                                    </input>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                            Check me out
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">
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
