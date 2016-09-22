@extends('layouts.default')
@section('content')

<div id="error" class="container-fluid page">
    <div class="content">
		<h1>404 Error: Page Not Found</h1>
		<p><img src="{{url('/')}}/img/whatd-you-do-tommy-boy.gif" alt="What'd You Do?" class="img-responsive center-block img-404"></p>
		<p>The page you are looking for ({{Request::url()}}) isn't here. We apologize for this inconvenience.</p>
		<p>If you think you are receiving this page in error, please email <a href="mailto:matt@crandelldesign.com">matt@crandelldesign.com</a> about the issue.</p>
	</div>
</div>

@stop