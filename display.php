<?php
include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Display</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
      <th scope="col">Date and Time alloted</th>
      <th scope="col">No of People</th>
      
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from res";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['name'];
    $time=$row['time'];
    $people=$row['no_of_people'];
 
    echo '<tr>
    <th scope="row">'.$name.'</th>
    <th scope="row">'.$time.'</th>
    <th scope="row">'.$people.'</th>

    </tr>
    ';
}
?>
  </tbody>
</table>
</body>
</html>