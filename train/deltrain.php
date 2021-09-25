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
        <h1></h1>
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




$no=$_REQUEST['no'];

$sql = "Delete FROM train where no=$no";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
