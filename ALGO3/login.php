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
	<style>
		body {
	font-family: "Arial";
	}
	input {
		font-size: 1.5em;
		height: 50px;
		width: 200px;
	}
	table, th, td {
		border:1px solid black;
	}
	</style>
</head>
<body>
	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: red;"><?php echo $_SESSION['message']; ?></h1>
	<?php } unset($_SESSION['message']); ?>
	<h1>Login Now!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" name="usernames">
		</p>
		<p>
			<label for="username">Password</label>
			<input type="password" name="passwords">
			<input type="submit" name="loginUserBtn">
		</p>
	</form>
	<p>Don't have an account? You may register <a href="register.php">here</a></p>
</body>
</html>