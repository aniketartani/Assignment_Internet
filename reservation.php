<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $time=$_POST['time'];
    $mobile=$_POST['mobile'];
    $people=$_POST['people'];

    $sql="insert into res(name,time,mobile,no_of_people) values('$name','$time','$mobile','$people')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        // echo "registerted";
        header('location:thank.php');
    }
    else{
        die(mysqli_error($con));
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
    <body style="background: antiquewhite">
        <title>CRUD OPERATION</title>
        <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" placeholder="Enter your name" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Enter date and Time</label>
    <input type="datetime-local" name="time" placeholder="Enter the time" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input name="mobile" placeholder="Enter your mobile no" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">No of People</label>
    <input name="people" placeholder="Enter no of people" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </body>
</html>