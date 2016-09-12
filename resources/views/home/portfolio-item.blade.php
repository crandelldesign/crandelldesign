@extends('layouts.default')
@section('content')
	<div class="portfolio-item">
		@if($client->is_custom)
			@include('portfolio.'.$client->slug, array('client'=>$client,'fullPage'=>'true'))
		@else
			@include('master.templates.client-modal', array('client'=>$client,'fullPage'=>'true'))
		@endif
	</div>
@stop
@section('scripts')
@stop