<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<style type="text/css">
		.nav-li{
			display: inline-block;
			padding-right: 1%;
			padding-left: 1%;
			color: white;
		}
		.nav-menu{
			margin: 0px;
			background: black;

		}
		.hilight{
			background: green;
		}
		body{
			margin: 0;
		}
	</style>
</head>
<body>
	<nav>
		<ul class="nav-menu">
			<a href="{{route('home')}}"><li class="nav-li hilight">
				<h2>Home</h2>
			</li></a>
			<li class="nav-li">
				<h2>Products</h2>
			</li>
			<li class="nav-li">
				<h2>Cart</h2>
			</li>
			<a href="{{route('auth','login')}}"><li class="nav-li">
				<h2>Sign in</h2>
			</li></a>
			<a href="{{route('auth','register')}}"><li class="nav-li">
				<h2>Register</h2>
			</li></a>
			<li class="nav-li">
				<h2>Profile</h2>
			</li>
		</ul>
	</nav>
</body>
</html>
