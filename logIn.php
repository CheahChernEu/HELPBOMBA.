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
  <form action="signUp.php" method="get">
  	<h2>Sign Up Credentials</h2>
  	<input  type="email" name="username" placeholder="Username" required>
	  <input type="text" name="password" placeholder="Password" required>
		<input  list="options" name="roleOptions" placeholder="Sign Up as" required>

		<datalist id="options">
  		<option value="CRS Manager">
  		<option value="CRS Staff">
  		<option value="Volunteer">
	  </datalist>
	  <button>SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="signIn.php" method="post">
		<h2>Sign In Here</h2>
	<input  type="email" name="username" placeholder="Username" required>
	<input  type="text" name="password" placeholder="Password" >
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
			<p> Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>
</div>

<footer class="text-center text-white" style="background-color: black; ">
 <p class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.7); font-size:26px; padding:auto;">
		© 2021 Copyright: Crisis Relief Services Organization
	</p>
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
	});c

	// const form = document.querySelector('#signInForm');
	// let username = form.elements.namedItem("username");
	// let password = form.elements.namedItem("password");
	//
	// form.addEventListener('submit', function(e){
	// 	e.preventDefault();
	// 	alert('SUBMITTED')
	// });

</script>


</body>
</html>
