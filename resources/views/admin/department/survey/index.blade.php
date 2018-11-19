@extends('admin.layout.auth')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('department', $department, 'survey') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-striped table-bordered text-center" id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Submitted Date
                                    </th>
                                    <th>
                                        @if($department=='sales') Sales @else PM @endif
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
                                        View
                                    </th>
                                    <th>
                                        Delete
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
                                        {{ date('Y-m-d') }}
                                    </td>
                                    <td>
                                        Tiger Xenon
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
                                        <a href="{{ url('/admin/' . $department . '/survey/view') }}">
                                            <i aria-hidden="true" class="fa fa-eye">
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <i aria-hidden="true" class="fa fa-trash">
                                        </i>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
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
