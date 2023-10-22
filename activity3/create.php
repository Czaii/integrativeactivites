<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create an Account</title>
	<style>
		body {
			background-color: #333;
			color: #fff;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			text-align: center;
		}

		.heading {
			font-size: 24px;
			margin-top: 20px;
		}

		.login-box {
			background-color: #444;
			width: 300px;
			margin: 0 auto;
			padding: 20px;
			border-radius: 10px;
			margin-top: 20px;
		}

		.textbox {
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			background-color: #555;
			border: none;
			color: #fff;
			border-radius: 5px;
		}

		.btn {
			background-color: #007BFF;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		.btn:hover {
			background-color: #0056b3;
		}

		#mini {
			color: #007BFF;
			text-decoration: none;
		}

		/* Dark mode toggle button */
		.dark-mode-btn {
			background-color: #333;
			color: #fff;
			border: none;
			cursor: pointer;
			padding: 10px 20px;
			border-radius: 5px;
		}
	</style>
</head>

<body>
	<h1 class="heading">Create an Account</h1>
	<form class="login-box" method="POST">
		<div class="textbox">
			<input class="nameForm" type="text" placeholder="Create Username" name="username">
		</div>
		<div class="textbox">
			<input type="text" placeholder="Create Email Address" name="email">
		</div>
		<div class="textbox">
			<input type="text" placeholder="First Name" name="firstname">
		</div>
		<div class="textbox">
			<input type="text" placeholder="Last Name" name="lastname">
		</div>
		<div class="textbox">
			<input type="password" placeholder="Enter Password" name="password">
		</div>

		<p><a href="index.php" id="mini">Already have an account?</a><br></p>

		<button onclick="return confirm('Added Successfully')" class="btn" type="submit" name="submit">Create Account</button>
	</form>

	<button class="dark-mode-btn" onclick="toggleDarkMode()">Toggle Dark Mode</button>
</body>
<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$pwd = $_POST['password'];
	mysqli_query($conn, "INSERT INTO users( username, email, firstname, lastname, password) 
				VALUES( '$username', '$email', '$fname', '$lname', '$pwd')");
}
?>
<script>
	function toggleDarkMode() {
		const body = document.body;
		body.classList.toggle('dark-mode');
	}
</script>

</html>
