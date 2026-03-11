<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ $title ?? 'Daily Quotes' }}</title>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite('resources/css/app.css')
	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('home') }}">Daily Quotes</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarNav">
    				<ul class="navbar-nav">
        				<li class="nav-item">
            				<a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" {{ request()->routeIs('home') ? 'aria-current=page' : '' }} href="{{ route('home') }}">Home</a>
						</li>
        				<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('quotes') ? 'active' : '' }}" {{ request()->routeIs('quotes') ? 'aria-current=page' : '' }} href="{{ route('quotes') }}">Quotes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('inserisci-elemento') ? 'active' : '' }}" {{ request()->routeIs('inserisci-elemento') ? 'aria-current=page' : '' }} href="{{ route('inserisci-elemento') }}">Inserisci elemento</a>
						</li>
					</ul>
				</div>
  			</div>
		</nav>
		<main class="hero-bg">
			<div class="container-fluid extra-padding-small">
				{{ $slot }}
			</div>
		</main>
		@vite('resources/js/app.js')
	</body>
</html>