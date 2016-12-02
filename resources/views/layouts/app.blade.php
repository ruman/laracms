{{-- Load Layout Body Classes --}}
<?php
    $layoutBodybodyClasses = 'front-end theme-light';
?>

@extends('structure.master')

{{-- Load Auth Layout Head --}}
@section('layout-head')

    {{-- Load Common Admin Head --}}
    @include('layouts.head')

@stop

@section('layout-header')

    @include('layouts.header')

@stop

@section('layout-content')

    @yield('content')

@stop

@section('layout-sidebar')

    @yield('sidebar')

@stop

@section('layout-footer')

    @include('layouts.footer')

@stop


{{-- Load Layout Scripts --}}
@section('layout-scripts')

    @yield('template_scripts')

@stop