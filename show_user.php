<?php
include("db2.php");
$result = mysqli_query($conn,"SELECT * FROM new_user");
?>

<!DOCTYPE html>
<html>

<head>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  	<h2></h2>
  	<table border='10'>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			
		</tr>
		<?php while($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
		<?php } ?>
		<?php// header('location:index.php');?>
	</table>
</body>

</html>

