@extends('layout.app')

@section('content')
<!-- Banner -->
{!! Form::open(['url' => $survey_id . '/' . $page->slug . '/store']) !!}
{!! isset($page->banner_content) ? $page->banner_content : '' !!}
<!-- Banner END -->
<!-- Content Containers -->
{!! isset($page->main_content) ? $page->main_content : '' !!}
{!! Form::close() !!}
<!-- Content Containers END -->
@endsection