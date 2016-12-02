<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ isset($title) ? $title.' | ' : '' }}First Laravel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
            <header>
                
            </header>
            <section id="main-content" class="clearfix">
                @yield('content')
            </section><!-- end main-content -->
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ Lang::get('titles.app') }}</title>
    <meta name="description" content="">
    <meta name="author" content="Mahbubur Rahman">

    {{-- Load Layout Head --}}
    @yield('layout-head')

  </head>

  <body class="{{ isset($layoutBodybodyClasses) ? $layoutBodybodyClasses : '' }} {{ isset($templateBodybodyClasses) ? $templateBodybodyClasses : '' }}">

    {{-- Load Layout HEADER --}}
    @yield('layout-header')

    {{-- Load Layout CONTENT --}}
    @yield('content')

    {{-- Load Layout SIDEBAR --}}
    @yield('layout-sidebar')

    {{-- Load Layout FOOTER --}}
    @yield('layout-footer')

    {{-- Load Layout SCRIPTS --}}
    @yield('layout-scripts')

  </body>
</html>