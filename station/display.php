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
        <h1> Welcome!</h1>
        <p>Here Are All The Details Of The Station</p>
        </table>
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

    $sql = "SELECT * FROM station";
    $result = $conn->query($sql);
    echo "<table border='1'>
    <tr bgcolor='yellow'>
    <th>Station Id</th>
    <th>Station Name</th>
    <th>Arrival Time</th>
    <th>Buffer Time</th>
    <th>Train Number</th>
    </tr>";

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr bgcolor='lightpink',cellspacing='0'>";
            echo "<td>" . $row['s_no'] . "</td>";
            echo "<td>" . $row['s_name'] . "</td>";
            echo "<td>" . $row['arrival_time'] . "</td>";
            echo "<td>" . $row['buffer_time'] . "</td>";
            echo "<td>" . $row['train_no'] . "</td>";
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