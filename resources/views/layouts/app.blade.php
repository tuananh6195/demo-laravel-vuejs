
<html lang="en">
<head>
	<title>Lara-Vue</title>
	<base href="{{asset('')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container" id="app">
		@yield('content')
	</div>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>