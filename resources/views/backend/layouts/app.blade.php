{{-- Load Layout Body Classes --}}
<?php
    $layoutBodybodyClasses = 'hold-transition skin-blue sidebar-mini';
?>

@extends('structure.master')

{{-- Load Auth Layout Head --}}
@section('layout-head')

    {{-- Load Common Admin Head --}}
    @include('backend.layouts.head')

@stop

@section('layout-header')

    @include('backend.layouts.header')
    @include('backend.layouts.navigation')

@stop

@section('layout-content')

    @yield('content')

@stop

@section('layout-footer')

    @include('backend.layouts.footer')

@stop

@section('layout-sidebar')

    @yield('sidebar')

@stop


{{-- Load Layout Scripts --}}
@section('layout-scripts')

    @yield('template_scripts')

@stop