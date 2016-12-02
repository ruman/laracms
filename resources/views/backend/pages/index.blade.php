{{-- Set Template Body Classes --}}
<?php
    $templateBodybodyClasses = 'list-pages';
?>

@section('template_title')
    Pages
@endsection

@section('template_fastload_css')
@endsection

@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if(isset($status))
        @include('partials/error', ['type' => 'success', 'message' => $status])
    @endif
    <section class="content-header">
      <h1>
        Site Pages
        <small>13 new messages</small>
      </h1>
      {!! Breadcrumbs::render() !!}
    </section>

    <!-- Main content -->
    <section class="content">
    	{!! HTML::link(url('/admin/pages/create'), Lang::get('titles.createnewpage')) !!}
      <div class="row">
      	<div class="col-md-12">
		    <div class="box box-primary">
		        <div class="box-header with-border">
		            <h3 class="box-title">Lang::get('titles.pages')</h3>
		            <div class="box-tools pull-right">
		                <div class="has-feedback">
		                    <input type="text" class="form-control input-sm" placeholder="Search Mail">
		                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
		                </div>
		            </div>
		            <!-- /.box-tools -->
		        </div>
		        <!-- /.box-header -->
		        <div class="box-body no-padding">
		            <div class="mailbox-controls">
		                <!-- Check all button -->
		                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
		                </button>
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
		                <!-- /.btn-group -->
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
		                <div class="pull-right">
		                    <strong>Total: {{$sitepages->count()}}</strong>
	                    	{{ $sitepages->links() }}
		                    <div class="btn-group">
		                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
		                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
		                    </div>
		                    <!-- /.btn-group -->
		                </div>
		                <!-- /.pull-right -->
		            </div>
		            <div id="sitePages" class="table-responsive mailbox-messages">
		                <table class="table table-hover table-striped">
		                    <tbody>
		                    	@if (count($sitepages) > 0)
						            @foreach ($sitepages->all() as $page)
						               <tr>
				                            <td>
				                                <input type="checkbox" id="{!!$page->id!!}">
				                            </td>
				                            <td class="mailbox-name"><a href="{{URL::to('/admin/pages/edit/'.$page->id)}}">{{$page->title}}</a></td>
				                            <td class="mailbox-subject">{!!$page->slug!!}
				                            </td>
				                            <td class="mailbox-date">{{$page->active}}</td>
				                            <td class="mailbox-date">{{$page->updated_at}}</td>
				                            <td class="mailbox-attachment text-center">
				                            	<a href="{{URL::to('/'.$page->slug)}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
		                        				<a href="javascript:void(0)" data-url="{{URL::to('/admin/pages/delete/'.$page->id)}}" class="btn btn-danger btn-xs del-page"><i class="fa fa-minus"></i></a>
				                            </td>
				                        </tr>
						            @endforeach
								@endif
		                        
		                    </tbody>
		                </table>
		                <!-- /.table -->
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
		                </div>
		                <!-- /.btn-group -->
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
		                <div class="pull-right">
		                	<strong>Total: {{$sitepages->count()}}</strong>
	                    	{{ $sitepages->links() }}
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
    
    @include('scripts.admin.pages');

@endsection
