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
    @include('admin.include.status')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    {!! Form::open(['url' => ['/admin/cms/pages/update', $id]]) !!}
                    <div class="box-body">
                        <!-- form start -->
                        <div class="form-group">
                            <label>
                                Title
                            </label>
                            <input class="form-control" name="title" placeholder="Enter title" type="text" value="{{ isset($page->title) ? $page->title : old('title') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                URL
                            </label>
                            <input class="form-control" name="slug" placeholder="Enter url" type="text" value="{{ isset($page->slug) ? $page->slug : old('slug') }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>Banner Content</label>
                            <textarea class="summernote-editor" name="banner_content">{{ isset($page->banner_content) ? $page->banner_content : old('banner_content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Main Content</label>
                            <textarea class="summernote-editor" name="main_content">{{ isset($page->main_content) ? $page->main_content : old('main_content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Ordering
                            </label>
                            <input class="form-control" name="ordering" placeholder="Enter order" type="number" value="{{ isset($page->ordering) ? $page->ordering : 0 }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Display
                            </label>
                            <select class="form-control" name="display">
                                <option value="1" {{ ($page->display==1) ? 'selected' : '' }}>
                                    Yes
                                </option>
                                <option value="0" {{ ($page->display==0) ? 'selected' : '' }}>
                                    No
                                </option>
                            </select>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{ url('/admin/cms/pages') }}">
                            Cancel
                        </a>
                        <button class="btn btn-primary pull-right" type="submit">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
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