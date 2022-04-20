<?php
include 'connect.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

   
    if($email=="admin@gmail.com" && $password=="admin")
    {
      header("location:display.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <title>Registration</title>
        <h1>LOGIN HERE</h1>
        <form method="post">
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input name="email" placeholder="Enter your email" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" placeholder="Enter your password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

    </body>
</html>