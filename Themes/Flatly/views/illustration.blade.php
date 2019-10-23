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
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/66.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/18835103_1778092892220553_1237006576_n.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/Acrylic Portrait.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/George Condo Transcript.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/IMG_5420.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/IMG_5427.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/IMG_5436.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/img20191017_12051707 copy.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/img20191017_12512098.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/img20191017_13034460.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/img20191017_13123788.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/img20191017_15162274.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/img20191017_15181532.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/Industrial Structure- Ink.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/Larger Piece of Work.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/nnbvb.jpg"/>
        </div>
        <div class="col-md-4">
            <img style="max-width: 100%;" src="/assets/media/images/portfolio/Illustration/The Human Form- Pen and Ink.jpg"/>
        </div>
    </div>
@stop
