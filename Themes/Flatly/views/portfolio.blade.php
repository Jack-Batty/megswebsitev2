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
            <a href="../portfolio/print">
                <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Print/Thumbnail.jpg"/>
                <h2>Print</h2>
            </a>
        </div>
        <div class="col-md-4" style="margin-bottom 30px;">
            <a href="../portfolio/typography">
                <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Typography/thumbnail2.jpg"/>
                <h2>Typography</h2>
            </a>
        </div>
        <div class="col-md-4" style="margin-bottom: 40px;">
            <a href="../portfolio/illustration">
                <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Illustration/Thumbnail.jpg"/>
                <h2>Illustration</h2>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="margin-bottom: 40px;">
            <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Animation/Animation Still 3.jpg"/>
            <h2>Animation</h2>
        </div>
        <div class="col-md-4" style="margin-bottom: 40px;">
            <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Editorial/thumbnail.jpg"/>
            <h2>Editorial</h2>
        </div>
        <div class="col-md-4" style="margin-bottom: 40px;">
            <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Zine/thumbnail.jpg"/>
            <h2>Zine</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="margin-bottom: 40px;">
            <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Photography/thumbnail.jpg"/>
            <h2>Photography</h2>
        </div>
        {{-- <div class="col-md-4" style="margin-bottom: 40px;">
            <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Photography/thumbnail.jpg"/>
            <h2>Personal Projects</h2>
        </div> --}}
        <div class="col-md-4" style="margin-bottom: 40px;">
            <img style="max-width: 100%; max-height: 300px;" src="/assets/media/images/portfolio/Sculptures/thumbnail.jpg"/>
            <h2>Sculptures</h2>
        </div>
    </div>
@stop
