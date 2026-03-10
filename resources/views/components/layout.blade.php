<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Daily Quotes</title>
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

		@vite('resources/css/app.css')

	</head>
	<body>
		
		{{ $slot }}
		
		@vite('resources/js/app.js')

	</body>
</html>