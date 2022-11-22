<?php

 include("db2.php");

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $name = $_POST['username'];
 $email = $_POST['email'];
 $q = " update new_user set id=$id, name='$name', email='$email' where id=$id  ";

 $query = mysqli_query($conn,$q);

 header('location:index.php');
 }

?>
 <?php
    $result = mysqli_query($conn,"SELECT * FROM new_user WHERE id= ".$_GET['id']);
    while ($row1=mysqli_fetch_assoc($result)) {
        // echo $row1['id'];
        $a1=$row1['name'];
        $a2=$row1['email'];
    }
// echo $result;
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <form method="post">
 <h1>  Update Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control" value= <?php echo $a1;?>> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control" value= <?php echo $a2;?>> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>

 </div>
</body>
</html>