@extends('admin.layout.auth')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $page_title }}
        </h1>
        {{ Breadcrumbs::render('view_department', $department, 'survey') }}
    </section>
    @include('admin.include.status')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header text-right">
                        <a class="btn btn-warning" href="{{ url('/admin/' . $department . '/survey') }}">
                            <i aria-hidden="true" class="fa fa-long-arrow-left">
                            </i>
                            Back
                        </a>
                    </div>
                    {!! Form::open(['url' => '/admin/' . $department . '/survey/update-survey/' . $survey_id]) !!}
                    @if($survey)
                    <div class="box-body">
                        <!-- form start -->
                        @php $survey_answer = json_decode($survey->survey); @endphp
                        <div class="form-group">
                            @if(array_has($survey_answer, 'old'))
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach($survey_answer->old as $key   =>  $value)
                                    <tr>
                                        <td>
                                            @if(is_numeric($value))
                                            {!! '<strong>' . ucwords($key) . ':</strong> ' !!}
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ ($value*10) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($value*10) }}%">
                                                    {{ $key . ' - ' . ($value) . '/10' }}
                                                </div>
                                            </div>
                                            @else
                                            {!! '<strong>' . ucwords($key) . ':</strong>' . $value !!}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach($survey_answer as $key   =>  $value)
                                    <tr>
                                        <td>
                                            {!! '<strong>' . ucwords($key) . ':</strong> ' . $value->comment !!}
                                            @if(is_numeric($value->score))
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ ($value->score*10) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($value->score*10) }}%">
                                                    {{ $key . ' - ' . ($value->score) . '/10' }}
                                                </div>
                                            </div>
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Addional Comment:</label>
                            <textarea name="additional_comment" class="form-control" rows="6" placeholder="Addional Comment">{{ isset($survey->additional_comment) ? $survey->additional_comment : '' }}</textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary " type="submit">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                        </button>
                    </div>
                    @endif
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