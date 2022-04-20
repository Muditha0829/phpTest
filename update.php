<?php

include 'connection.php';

$id=$_GET['updateid'];

$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set name='$name',email='$email',mobile='$mobile',password='$password' where id=$id" ;
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>

  <br>
  <div class="container my-5">

  <form method ="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your Name" value=<?php echo $name;?>  autocomplete="off">
</div>
  <div class="mb-3">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email" value=<?php echo $email; ?> autocomplete="off">
</div>
<div class="mb-3">
    <label>Mobile Number</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile" value=<?php echo $mobile; ?> autocomplete="off">
</div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter your password" value=<?php echo $password; ?> autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

  </body>
</html>