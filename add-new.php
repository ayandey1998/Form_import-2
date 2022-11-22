<?php
include ('db2.php');

define( 'APP_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].'/task-two/' );
define( 'APP_ROOT_PATH', 'http://'.$_SERVER["SERVER_NAME"].'/task-two/' );


		$sql = "INSERT INTO `new_user` (
			`name`, 
			`email`
		) VALUES (
			'" . $_POST['name'] . "',
			'" . $_POST['email'] . "'
		)";
		$queryResult = $conn->query($sql);
		if($queryResult === true) {
			print("yes");
		} else {
			print("no");
		}
header('location:index.php');

	
?>