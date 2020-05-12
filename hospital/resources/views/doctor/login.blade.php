<!DOCTYPE HTML>
<html>
<head>
<title>Doctor Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('doctor') }}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('doctor') }}/css/style.css" rel='stylesheet' type='text/css' /> 

</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		
		<h2>Doctor Login</h2>
		
		 {!! Form::open(['url'=>'/doctor/login','method'=>'post']) !!}
			<div class="name">
				<span class="name">Email:</span>
				<input type="email" name="email" class="name" placeholder="Enter your Email address" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="Enter Password" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br><br>
				<a href="#">Forgot Password</a><br>
				<a href="{{ asset('/') }}" style="text-align: center;">Back to Home</a>

			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		 {!! Form::close() !!}
				
	</div>
	</div>
	</div>
</body>
</html>