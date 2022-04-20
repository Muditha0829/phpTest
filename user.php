<?php

include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "Data inserted succeefully";
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
    <input type="text" class="form-control" name="name" placeholder="Enter your Name"  autocomplete="off">
</div>
  <div class="mb-3">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off">
</div>
<div class="mb-3">
    <label>Mobile Number</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile" autocomplete="off">
</div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

  </body>
</html>