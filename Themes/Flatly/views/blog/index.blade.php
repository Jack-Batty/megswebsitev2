@extends('layouts.master')

@section('title')
    Blog posts | @parent
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
            {{-- <h2>{{$posts}}</h2> --}}
            <?php if (isset($posts)): ?>
            <ul>
                <?php foreach ($posts as $post): ?>
                    <li>
                        <img src="{{ Imagy::getThumbnail($post->files->first()->path, 'blogThumb') }}" alt="" />
                        <h3><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h3>
                        <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                    </li>
                    <div class="clearfix"></div>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
@stop
