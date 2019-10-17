<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')@setting('core::site-name')@show</title>
    @if(isset($alternate))
        @foreach($alternate as $alternateLocale=>$alternateSlug)
            <link rel="alternate" hreflang="{{$alternateLocale}}" href="{{url($alternateLocale.'/'.$alternateSlug)}}">
        @endforeach
    @endif
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    {{-- <link rel="stylesheet" type="text/css" href="css/core.css">
    <link rel="stylesheet" type="text/css" href="css/elements.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css"> --}}
    {{-- <link rel="icon" type="image/png" href="favicon.png?version=4"> --}}

    {!! Theme::style('css/main.css') !!}
    {!! Theme::style('css/core.css') !!}
    {!! Theme::style('css/elements.css') !!}
    {!! Theme::style('css/custom.css') !!}
    @stack('css-stack')
</head>
<body>

@auth
    @include('partials.admin-bar')
@endauth
@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

{!! Theme::script('js/all.js') !!}
@yield('scripts')

<?php if (Setting::has('core::analytics-script')): ?>
{!! Setting::get('core::analytics-script') !!}
<?php endif; ?>
@stack('js-stack')
</body>
</html>
