<title>{{isset($title) ? $title : ''}}</title>
<meta name="description" content="{{isset($description) ? $description : ''}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}" />

<?php $cache = 1; ?>
<link href="{{url('/')}}/css/style.css?version={{$cache}}" rel="stylesheet" type="text/css" media="all" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lte IE 8]>
	<script src="{{url('/')}}/js/html5shiv.min.js"></script>
	<script src="{{url('/')}}/js/respond.min.js"></script>
	<style>
		.navbar.navbar-fixed-top .navbar-brand img {
			height: 30px;
			width: 155px;
			max-width: none;
		}
		.grid-item {
			width: 22% !important;
		}
		.services-container {
    		background: url(../img/services-container-bg.jpg) no-repeat center center fixed !important;
    	}
	</style>
<![endif]-->

<link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="{{url('/')}}/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{{url('/')}}/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{url('/')}}/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/favicon-16x16.png">
<link rel="manifest" href="{{url('/')}}/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{url('/')}}/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">