<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: red;"><?php echo $_SESSION['message']; ?></h1>
	<?php } unset($_SESSION['message']); ?>



	<?php if (isset($_SESSION['username'])) { ?>
		<h1>Hello there!! <?php echo $_SESSION['username']; ?></h1>
		<a href="core/handleForms.php?logoutAUser=1">Logout</a>
	<?php } else { echo "<h1>No user logged in</h1>";}?>

	<h3>Users List</h3>
	<ul>
		<?php $getAllUsers = getAllUsers($pdo); ?>
		<?php foreach ($getAllUsers as $row) { ?>
			<li>
				<a href="viewuser.php?user_id=<?php echo $row['user_id']; ?>"><?php echo $row['username']; ?></a>
			</li>
		<?php } ?>
	</ul>

	<h1>Welcome Fitness Class Services! Add new coach!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">Username</label> 
			<input type="text" name="username">
		</p>
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="firstName">Date of Birth</label> 
			<input type="date" name="dateOfBirth">
		</p>
		<p>
			<label for="firstName">Specialization</label> 
			<input type="text" name="specialization">
			<input type="submit" name="insertCoachBtn">
		</p>
	</form>
	<?php $getAllCoach = getAllCoach($pdo); ?>
	<?php foreach ($getAllCoach as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: auto; margin-top: 20px;">
		<h3>Username: <?php echo $row['username']; ?></h3>
		<h3>FirstName: <?php echo $row['first_name']; ?></h3>
		<h3>LastName: <?php echo $row['last_name']; ?></h3>
		<h3>Date Of Birth: <?php echo $row['date_of_birth']; ?></h3>
		<h3>Specialization: <?php echo $row['specialization']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>
		<h3>Added by: <?php echo $row['added_by']; ?></h3>
		<h3>Last Updated: <?php echo $row['last_updated']; ?></h3>
		<h3>Edited by: <?php echo $row['edited_by']; ?></h3>
		


		<div class="editAndDelete" style="float: right;margin-right: 20px;padding: 4px 0px 0px 0px;">
			<a href="viewclients.php?coach_id=<?php echo $row['coach_id']; ?>">View Clients</a>
			<a href="editcoach.php?coach_id=<?php echo $row['coach_id']; ?>">Edit</a>
			<a href="deletecoach.php?coach_id=<?php echo $row['coach_id']; ?>">Delete</a>
		</div>

		

	</div> 
	<?php  }  ?>
</body>
</html>