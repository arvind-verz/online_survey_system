@extends('admin.layout.auth')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('department', $department, 'users') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <a class="btn btn-info" href="{{ url('/admin/' . $department . '/users/create') }}">
                            <i aria-hidden="true" class="fa fa-plus-circle">
                            </i>
                            Create
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
                                        {{ ucfirst($department) }} Name
                                    </th>
                                    <th>
                                        {{ ucfirst($department) }} Email
                                    </th>
                                    <th>
                                        Active
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Export
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @if($users->count())
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $i }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        @if($user->is_active==1) Yes @else No @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/' . $department . '/users/edit/' . $user->unique_id) }}">
                                            <i aria-hidden="true" class="fa fa-pencil-square">
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <i aria-hidden="true" class="fa fa-file-excel-o">
                                        </i>
                                    </td>
                                </tr>
                                @endforeach
                                @php $i++; @endphp
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
