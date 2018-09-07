@extends('admin.layout.auth')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('department', $department, 'customers') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header text-right">
                        <a class="btn btn-info" href="{{ url('/admin/' . $department . '/customers/create') }}">
                            <i aria-hidden="true" class="fa fa-plus-circle">
                            </i>
                            Add Customer
                        </a>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered text-center" id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        {{ ucfirst($department) }}
                                    </th>
                                    <th>
                                        Company Name
                                    </th>
                                    <th>
                                        Customer Name
                                    </th>
                                    <th>
                                        Customer Email
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=1;$i<20;$i++)
                                <tr>
                                    <td>
                                        {{ $i }}
                                    </td>
                                    <td>
                                        Tiger Nixon
                                    </td>
                                    <td>
                                        Verz Design
                                    </td>
                                    <td>
                                        Arvind
                                    </td>
                                    <td>
                                        arvind.verz@gmail.com
                                    </td>
                                    <td>
                                        Sent
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/' . $department . '/customers/edit') }}">
                                            <i aria-hidden="true" class="fa fa-pencil-square">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        {{ ucfirst($department) }}
                                    </th>
                                    <th>
                                        Company Name
                                    </th>
                                    <th>
                                        Customer Name
                                    </th>
                                    <th>
                                        Customer Email
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
