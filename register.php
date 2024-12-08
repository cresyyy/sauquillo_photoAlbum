<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/styles.css">
	<style>
		body {
		    font-family: 'Arial', sans-serif;
		    display: flex;
		    background-color: #f4d1ff; 
		    color: #333;
		    margin: 0;
		    padding: 0;
		    justify-content: center;
		    align-items: center;
		    height: 100vh;
		    flex-direction: column; 
		}

		a {
		    color: #5784e6;
		    text-decoration: none;
		}

		a:hover {
		    text-decoration: underline;
		}

		
		form {
		    background-color: #fff;
		    padding: 30px;
		    border-radius: 10px;
		    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
		    width: 100%;
		    max-width: 400px;
		    margin-top: 20px;
		}

	
		h1 {
		    color: #0b1957;
		    text-align: center;
		    font-size: 2rem;
		    margin-bottom: 20px;
		}

		input[type="text"], input[type="password"] {
		    width: 100%;
		    padding: 12px;
		    margin: 10px 0;
		    border-radius: 8px;
		    border: 1px solid #ddd;
		    font-size: 1rem;
		    box-sizing: border-box;
		}

		
		input[type="submit"] {
		    width: 100%;
		    padding: 12px;
		    background-color: #fa9ebc; 
		    color: white;
		    border: none;
		    border-radius: 8px;
		    font-size: 1.1rem;
		    cursor: pointer;
		    transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
		    background-color: #f4d1ff; 
		}

	
		h1.message {
		    text-align: center;
		    font-size: 1.2rem;
		    margin: 20px 0;
		}

		h1.message.green {
		    color: green;
		}

		h1.message.red {
		    color: red;
		}


		p {
		    text-align: center;
		    font-size: 1rem;
		}

		p a {
		    font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>Register here!</h1>
	<?php  
	if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

		if ($_SESSION['status'] == "200") {
			echo "<h1 class='message green'>{$_SESSION['message']}</h1>";
		}

		else {
			echo "<h1 class='message red'>{$_SESSION['message']}</h1>";	
		}

	}
	unset($_SESSION['message']);
	unset($_SESSION['status']);
	?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" name="username">
		</p>
		<p>
			<label for="first_name">First Name</label>
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name="password">
		</p>
		<p>
			<label for="confirm_password">Confirm Password</label>
			<input type="password" name="confirm_password">
		</p>
		<p>
			<input type="submit" name="insertNewUserBtn" style="margin-top: 25px;">
		</p>
	</form>
	<p>Already have an account? You may login <a href="login.php">here</a></p>
</body>
</html>
