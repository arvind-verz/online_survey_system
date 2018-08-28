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
                    <div class="box-header text-right">
                        <a href="{{ url('/admin/cms/pages/create') }}" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New</a>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered text-center" id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Office
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        Start date
                                    </th>
                                    <th>
                                        Salary
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=1;$i<20;$i++)
                                <tr>
                                    <td>
                                        Tiger Nixon
                                    </td>
                                    <td>
                                        System Architect
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        61
                                    </td>
                                    <td>
                                        2011/04/25
                                    </td>
                                    <td>
                                        $320,800
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Office
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        Start date
                                    </th>
                                    <th>
                                        Salary
                                    </th>
                                </tr>
                            </tfoot>
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
