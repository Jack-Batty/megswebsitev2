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
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/776.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/IMG_5454.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/IMG_5459.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/IMG_5462.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img2019101gg7_11594416 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_1gfv1594416 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_1gg1594416 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_11565103.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_11594416 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_12062447 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_12073498 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/img20191017_13135118.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/Untitled-2.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/Untitled-651.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/xa.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Print/xbxn.jpg"/>
        </div>
    </div>
@stop
