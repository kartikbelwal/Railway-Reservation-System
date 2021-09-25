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
        <h1> Welcome!</h1>
        <p>Here are the details of the passengers</p>
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

    $sql = "SELECT * FROM passenger";
    $result = $conn->query($sql);

    echo "<table border='1'>
    <tr bgcolor='yellow'>
    <th>Passenger ID</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Ticket Number</th>
    </tr>";

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr bgcolor='white'>";
            echo "<td>" . $row['p_id'] . "</td>";
            echo "<td>" . $row['f_name'] . "</td>";
            echo "<td>" . $row['m_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['t_no'] . "</td>";
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