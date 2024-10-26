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
	<a href="index.php">Return to home</a>
	<?php $getAllInfoByCoachID = getAllInfoByCoachID($pdo, $_GET['coach_id']); ?>
	<h1>Username: <?php echo $getAllInfoByCoachID['username']; ?></h1>
	<h1>Add New Client</h1>
	<form action="core/handleForms.php?coach_id=<?php echo $_GET['coach_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="lastName">
			<input type="submit" name="insertNewClientBtn">
		</p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Client ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Coach</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getClientsByCoach = getClientsByCoach($pdo, $_GET['coach_id']); ?>
	  <?php foreach ($getClientsByCoach as $row) { ?>
	  <tr>
	  	<td><?php echo $row['client_id']; ?></td>	  	
	  	<td><?php echo $row['first_name']; ?></td>	  	
	  	<td><?php echo $row['last_name']; ?></td>	  	
	  	<td><?php echo $row['coach_name']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editclient.php?client_id=<?php echo $row['client_id']; ?>&coach_id=<?php echo $_GET['coach_id']; ?>">Edit</a>

	  		<a href="deleteclient.php?client_id=<?php echo $row['client_id']; ?>&coach_id=<?php echo $_GET['coach_id']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

	
</body>
</html>