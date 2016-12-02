{{-- Set Template Body Classes --}}
<?php
    $templateBodybodyClasses = 'login-page';
?>

@extends('backend.layouts.auth')

@section('template_title')
    Login
@endsection

@section('template_fastload_css')
@endsection

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/">Omasters <strong>Admin</strong> LTE</a>
        </div>
        <div class="login-box-body">

            @if(session()->has('error'))
                @include('partials/error', ['type' => 'danger', 'message' => session('error')])
            @endif  

            {!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!} 
                <div class="form-group has-feedback">
                    <div class="row">
                        {!! Form::control('text', 12, 'log', $errors, trans('front/login.log')) !!}
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="row">
                        {!! Form::control('password', 12, 'password', $errors, trans('front/login.password')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            {!! Form::checkbox('memory', 'memory', true, array('id' => 'memory', 'class' => 'icheckbox_square-blue')); !!}
                            {!! Form::label('memory', trans('front/login.remind')); !!}
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        {!! Form::button('<i class="fa fa-sign-in" aria-hidden="true"></i> '.trans('front/form.send'), array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
                    </div>
                    <!-- /.col -->
                </div>
            
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('template_scripts')

    {!! HTML::script('/assets/js/login.js', array('type' => 'text/javascript')) !!}
    
    @include('scripts.checkbox');
    {{-- @include('scripts.show-hide-passwords'); --}}

@endsection