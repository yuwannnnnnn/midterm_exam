<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this coach?</h1>
	<?php $getCoachByID = getCoachByID($pdo, $_GET['coach_id']); ?>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Username: <?php echo $getCoachByID['username']; ?></h2>
		<h2>FirstName: <?php echo $getCoachByID['first_name']; ?></h2>
		<h2>LastName: <?php echo $getCoachByID['last_name']; ?></h2>
		<h2>Date Of Birth: <?php echo $getCoachByID['date_of_birth']; ?></h2>
		<h2>Specialization: <?php echo $getCoachByID['specialization']; ?></h2>
		<h2>Date Added: <?php echo $getCoachByID['date_added']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?coach_id=<?php echo $_GET['coach_id']; ?>" method="POST">
				<input type="submit" name="deleteCoachBtn" value="Delete">
			</form>			
		</div>	

	</div>
</body>
</html>