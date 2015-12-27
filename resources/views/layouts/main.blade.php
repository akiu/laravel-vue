<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
	<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
	<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
	<script src="{{ asset('bower_components/vue/dist/vue.js') }}"></script>
	<script src="{{ asset('bower_components/vue-resource/dist/vue-resource.js') }}"></script>
	<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
	@yield('script-head')
</head>
<body>

@yield('content')

@yield('script-bottom')
</body>
</html>