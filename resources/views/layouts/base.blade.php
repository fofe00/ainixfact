<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>Ainix</title>
</head>
<body>
	@include('layouts/partials/_nav')con
	<div class="cont container" style="margin-top: 50px">
		@yield('content')
	</div>

</body>
</html>