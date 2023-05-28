<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		form {
			width: 50%;
			margin: auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f2f2f2;
		}
		input[type=text], input[type=email], input[type=password] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="register.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Register">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Connect to MySQL database
		$servername = "localhost";
		$username = "root";
		$password = "Devops@123";
		$dbname = "mydatabase";
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Get form data
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Insert data into MySQL database
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
		if ($conn->query($sql) === TRUE) {
			echo "<p>User registered successfully!</p>";
			header("Location: login.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		// Close MySQL database connection
		$conn->close();
	}
	?>
</body>
</html>

