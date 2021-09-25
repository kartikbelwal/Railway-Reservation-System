<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="passenger.css">

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


 $p_id=$_REQUEST['p_id'];
 $f_name=$_REQUEST['f_name'];
 $m_name=$_REQUEST['m_name'];
 $last_name=$_REQUEST['last_name'];
 $age=$_REQUEST['age'];
 $gender=$_REQUEST['gender'];
 $phone=$_REQUEST['phone'];
 $t_no=$_REQUEST['t_no'];

//  $sql= "INSERT into passenger VALUES ('$p_id','$f_name','$m_name','$l_name' ,'$age','$gender','$phone','$t_no')";

 

$sql = "INSERT INTO passenger
VALUES ('$p_id','$f_name','$m_name','$last_name' ,'$age','$gender','$phone','$t_no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


