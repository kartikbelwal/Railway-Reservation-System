<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Station</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="station.css">

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


 $s_name=$_REQUEST['s_name'];
 $s_no=$_REQUEST['s_no'];
 $arrival_time=$_REQUEST['arrival_time'];
 $buffer_time=$_REQUEST['buffer_time'];
 $train_no=$_REQUEST['train_no'];
 


 

$sql = "INSERT INTO station
VALUES ('$s_name','$s_no','$arrival_time','$buffer_time' ,'$train_no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

