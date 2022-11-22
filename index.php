<?php
	include("db2.php");

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$q = " DELETE FROM `new_user` WHERE id = $id ";
		mysqli_query($conn, $q);
	}

?>
<!DOCTYPE html>
<html>

<head>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  	<h2>Table</h2>	
  <form method="POST" action="add-new.php" enctype="multipart/form-data">
  <label for="name">Name</label>
  <input type="text" name="name">
  <br>
  <label for="email">Email</label>
  <input type="email" name="email">
  <br>
  <input type="submit" name="upload" value="Submit">
  </form>
  <br>
  <br>
  <a href="index.php">Show User</a>
  <br>
  	<table border='10'>
		<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>
		<?php
			$result = mysqli_query($conn,"SELECT * FROM new_user");
			while($row = mysqli_fetch_array($result)) {
		?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><button> <a href="index.php?id= <?php echo $row['id'];?>">Delete</button></td>
		<td><button> <a href="update2.php?id= <?php echo $row['id'];?>">Update</button></td>
		</tr>
		<?php } ?>
	</table>
