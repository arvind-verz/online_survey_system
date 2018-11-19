@extends('admin.layout.auth')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('pages') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ url('/admin/cms/pages/create') }}" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered text-center" id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Display
                                    </th>
                                    <th>
                                        Order
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($pages->count())
                                @foreach($pages as $page)
                                <tr>
                                    <td>
                                        {{ $page->title }}
                                    </td>
                                    <td>
                                        {{ ($page->display==1) ? 'Yes' : 'No' }}
                                    </td>
                                    <td>
                                        {{ $page->ordering }}
                                    </td>
                                    <td>
                                        {{ $page->created_at }}
                                    </td>
                                    <td>
                                        {{ $page->updated_at }}
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/cms/pages/edit/' . $page->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
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
