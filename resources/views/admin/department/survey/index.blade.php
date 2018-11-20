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
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @if($surveys->count())
                                @foreach($surveys as $survey)
                                <tr>
                                    <td>
                                        {{ $i }}
                                    </td>
                                    <td>
                                        {{ isset($survey->submitted_at) ? $survey->submitted_at : '-' }}
                                    </td>
                                    <td>
                                        Tiger Xenon
                                    </td>
                                    <td>
                                        {{ isset($survey->company_name) ? $survey->company_name : '-' }}
                                    </td>
                                    <td>
                                        {{ isset($survey->firstname) ? $survey->firstname . ' ' . $survey->lastname : '-' }}
                                    </td>
                                    <td>
                                        {{ isset($survey->email) ? $survey->email : '-' }}
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/' . $department . '/survey/view') }}" class="btn btn-primary btn-sm" title="View">
                                            <i aria-hidden="true" class="fa fa-eye">
                                            </i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" title="Delete">
                                        <i aria-hidden="true" class="fa fa-trash">
                                        </i>
                                        </button>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                                @endif
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