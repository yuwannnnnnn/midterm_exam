<?php require_once 'core/handleForms.php'; ?>
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
	<?php $getCoachByID = getCoachByID($pdo, $_GET['coach_id']); ?>
	<h1>Edit the coach!</h1>
	<form action="core/handleForms.php?coach_id=<?php echo $_GET['coach_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getCoachByID['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getCoachByID['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Date of Birth</label> 
			<input type="date" name="dateOfBirth" value="<?php echo $getCoachByID['date_of_birth']; ?>">
		</p>
		<p>
			<label for="firstName">Specialization</label> 
			<input type="text" name="specialization" value="<?php echo $getCoachByID['specialization']; ?>">
			<input type="submit" name="editCoachBtn">
		</p>
	</form>
</body>
</html>