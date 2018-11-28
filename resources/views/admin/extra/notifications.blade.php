@extends('admin.layout.auth')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('notifications') }}
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-striped table-bordered" id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        Notification
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($notifications->count())
                                @foreach($notifications as $notification)
                                <tr>
                                    <td>
                                        <i class="fa fa-flag text-aqua">
                                        </i>
                                        {{ get_survey_notification_by_survey_id($notification->survey_id) }}
                                        <a href="{{ get_survey_link_by_department($notification->survey_id) }}" class="btn btn-default btn-xs">View</a>
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