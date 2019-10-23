@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <div class="row" style="text-align: center;">
        {{-- <h1>{{ $page->title }}</h1> --}}
        <div style="width: 74%; margin-left: 13%; line-height: 1.5em !important;">
            {!! $page->body !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/about/About page/edit.jpg" />
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/about/About page/MeganChadderton3.jpg" />
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/about/About page/megartwork.jpg" />
        </div>
    </div>
@stop
