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
                            <div class="form-group">
                                <label>
                                    Title
                                </label>
                                <input class="form-control" placeholder="Enter title" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Sub Title
                                </label>
                                <input class="form-control" placeholder="Enter sub title" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="summernote-editor" name="content"></textarea>
                            </div>
                            <div class="form-group">
                                <label>
                                    Slug
                                </label>
                                <input class="form-control" placeholder="Enter slug" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Display
                                </label>
                                <select class="form-control" name="display">
                                    <option value="1">
                                        Yes
                                    </option>
                                    <option value="0">
                                        No
                                    </option>
                                </select>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Submit
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
