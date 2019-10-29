@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    {{-- <div class="row">
        <h1>{{ $page->title }}</h1>
        {!! $page->body !!}
    </div> --}}
    <div class="row" style="text-align: center;">
        <div class="col-md-6">
            <h4><a href="mailto:hello@megchadderton.co.uk">hello@megchadderton.co.uk</a></h4>
            <br />
            <a href="https://twitter.com/ArtsyChad">
                <img src="/assets/media/images/twitter-logo.png" style="max-width: 150px; max-height: 150px;" />
            </a>
        </div>
        <div class="col-md-6">
            <iframe style="width: 700px; height: 860px;" src="https://docs.google.com/forms/d/e/1FAIpQLSd6E9ijZVfrp2uosgVjEk3CZ2NyMlQvi9BLe5ujixvAdNPiOQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
    </div>
@stop
