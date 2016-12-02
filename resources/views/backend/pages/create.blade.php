{{-- Set Template Body Classes --}}
<?php
    $templateBodybodyClasses = 'create-page';
?>

@section('template_title')
    Create New Page
@endsection

@section('template_fastload_css')
@endsection

@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::get('backend.pages.createnew')}}
      </h1>
      {!! Breadcrumbs::render() !!}
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="box-title">{{Lang::get('titles.createpage')}}</h1>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive mailbox-messages">
                    @if(session()->has('error'))
                        @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                    @endif
                    @include('partials/errors')
                  <section class="content">
                    <div class="row">
                      <!-- right column -->
                      <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                          <div class="box-header with-border">
                            <h3 class="box-title">{{Lang::get('backend.pages.createnewpage')}}</h3>
                          </div>
                          <!-- /.box-header -->
                          <!-- form start -->
                          {{-- Form::open(array('action' => 'Backend\SitePagesController@store', 'method' => 'POST', 'role' => 'form', 'class'=> 'form-horizontal')) --}}

                          {!! Form::model($page, [
                              'method' => $page->exists ? 'put' : 'post',
                              'route' => $page->exists ? ['admin::editpage', $page->id] : 'admin::createpage', 
                              'role' => 'form', 'class'=> 'form-horizontal' 
                              ])
                          !!}
                            {!! Form::hidden('user_id', Auth::user()->id) !!}
                            <div class="box-body">
                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">{!! Form::label('Page Title') !!}</label>

                                <div class="col-sm-10">
                                  {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Page Slug</label>

                                <div class="col-sm-10">
                                  {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'slug', 'placeholder'=>'Page Slug']) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="pagesummary" class="col-sm-2 control-label">Page Summary</label>

                                <div class="col-sm-10">
                                  {!! Form::textarea('summary', null, ['class'=>'form-control', 'id' => 'pagesummary']) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="pagecontent" class="col-sm-2 control-label">Page Content</label>

                                <div class="col-sm-10">
                                   {!! Form::textarea('content', null, ['class'=>'form-control', 'id' => 'pagecontent']) !!}
                                </div>
                              </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                              {!! Form::button(Lang::get('back/admin.cancel'), array('class'=>'btn btn-default')) !!}
                              {!! Form::submit(Lang::get('back/admin.save'), array('class'=>'btn btn-info pull-right')) !!}
                            </div>
                            <!-- /.box-footer -->
                          {!! Form::close() !!}
                        </div>
                        <!-- /.box -->
                      </div>
                      <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                  </section>
                  <!-- /.content -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                </div>
            </div>
        </div>
        <!-- /. box -->
    </div>
    <!-- /.col -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('sidebar')

  @include('backend.layouts.control-sidebar')

@endsection

@section('template_scripts')

    {!! HTML::script('/assets/js/admin/pages.js', array('type' => 'text/javascript')) !!}
    {!! HTML::script('/assets/vendor/unisharp/laravel-ckeditor/ckeditor.js', array('type' => 'text/javascript')) !!}
    
    @include('scripts.admin.pages');

    <script>
      $(window).load(function(){
        if($("#pagecontent").length)
          CKEDITOR.replace('pagecontent');
      });
    </script>

@endsection
