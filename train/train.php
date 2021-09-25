<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="train.css">

</head>
<body>
    
  <img class="tr" src="tr.jpg" alt="">
    <div class="container">
        <h1>The Response after submission of the form is:</h1>
        <p></p>
<?php
$server="localhost";
$username="root";
$password="";
$database="railwayreservation";

$conn=mysqli_connect($server, $username, $password,$database);
if(!$conn){
	die("connection to this database failed due to". mysqli_connect_error());
}


 $train_number=$_REQUEST['train_number'];
 $train_name=$_REQUEST['train_name'];
 $source=$_REQUEST['source'];
 $destination=$_REQUEST['destination'];
 $status=$_REQUEST['status'];
 $number_of_seats=$_REQUEST['number_of_seats'];
 



 

$sql = "INSERT INTO train
VALUES ('$train_number','$train_name','$source','$destination','$status' ,'$number_of_seats')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


