<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
	<title>Newark, Ohio Developers{{{ isset($title) ? ' | '.$title : null }}}</title>

	{{ HTML::style('assets/css/main.css') }}
	{{ $customCss or null }}
</head>
<body>
	<header>
		<h1>Newark, Ohio Developers</h1>
	</header>
	<main>
		@yield('main')
	</main>
</body>
</html>