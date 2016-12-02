@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if(session()->has('error'))
                @include('partials/error', ['type' => 'danger', 'message' => session('error')])
            @endif

            @include('partials/errors');

            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}   
                
                        <div class="row">

                            {!! Form::control('text', 6, 'log', $errors, trans('front/login.log')) !!}
                            {!! Form::control('password', 6, 'password', $errors, trans('front/login.password')) !!}
                            {!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
                            {!! Form::check('memory', trans('front/login.remind')) !!}     
                            {!! Form::text('address', '', ['class' => 'hpet']) !!}       
                            <div class="col-lg-12">                 
                                {!! link_to('password/email', trans('front/login.forget')) !!}
                            </div>

                        </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
