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
        <h1> Welcome!</h1>
        <p>Here are the details of the trains</p>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "railwayreservation";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM train";
    $result = $conn->query($sql);

    echo "<table border='1'>
    <tr bgcolor='yellow'>
    <th>Train Number</th>
    <th>Train Name</th>
    <th>Source</th>
    <th>Destination</th>
    <th>Status</th>
    <th>Number Of Seats</th>
    </tr>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr bgcolor='white'>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['source'] . "</td>";
            echo "<td>" . $row['destination'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['no_of_seats'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>