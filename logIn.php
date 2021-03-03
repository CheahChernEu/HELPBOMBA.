<!DOCTYPE html>
<html>
<head>
	<title>Login Homepage</title>
	<link rel="stylesheet" type="text/css" href="loginStyling.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="bg">
  <div class="container" id="container">
  <div class="form-container sign-up-container">
  <form action="">
  	<h2>Sign Up Credentials</h2>
  	<input type="username" name="username" placeholder="Username">
	  <input type="password" name="password" placeholder="Password">
	  <button>SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="#">
		<h2>Sign In Here</h2>
	<input type="username" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<button>Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>Keep us connected? Sign In Here </p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Welcome to HELP Bomba</h1>
			<p>    Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>
</div>

<footer>
  <p>Disclaimer: </p>
</footer>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>
