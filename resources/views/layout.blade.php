<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

	<link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="antialiased">
      
      <div class="menu">
	<a href="/">HOME</a>
	<a href="/contact">CONTACT</a>
	<a href="/about">ABOUT</a>
	<a href="/project">PROJECT</a>
      </div>
      
      @yield('content')
      
    </body>
</html>
