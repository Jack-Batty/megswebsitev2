@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <div class="row">
        <h1>{{ $page->title }}</h1>
        {{-- {!! $page->body !!} --}}

    </div>
    <div class="row">
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Typography/img20191017_13111022.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Typography/thumbnail2.jpg"/>
        </div>
    </div>
@stop
