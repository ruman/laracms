{{-- Set Template Body Classes --}}
<?php
    $templateBodybodyClasses = 'list-pages';
?>

@section('template_title')
    {!! $page->title !!}
@endsection

@section('template_fastload_css')
@endsection

@extends('layouts.app')

@section('content')
	<!--======================== content ===========================-->
<div id="content">
    <section class="row_1 second">
        <div class="container">
            <div class="row">
                <article class="col-sm-12">
                	<h1>{!! $page->title !!}</h1>
                	<div class="clearfix">
                		{!! $page->content !!}
                	</div>
                </article>
            </div>
        </div>
    </section>
</div>
<!--======================== end content ===========================-->


@endsection

@section('sidebar')

	

@endsection

@section('template_scripts')

   <script type="text/javascript">
   	

   </script>

@endsection
