<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Railway Reservation Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ticket.css">

</head>
<body>
    
  <img class="tr" src="tr.jpg" alt="">
    <div class="container">
        <h1> Welcome!</h1>
        <p>Here are the details of the Tickets</p>
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

    $sql = "select passenger.p_id,passenger.f_name,passenger.m_name,passenger.last_name,ticket.pnr,ticket.date_of_travel,ticket.coach,ticket.seatno,train.no,train.name,train.source,station.s_name,train.status,station.s_no,station.arrival_time,station.buffer_time from passenger JOIN ticket ON ticket.pnr=passenger.t_no 
    join train on train.no=ticket.t_no
    join station on station.train_no=train.no";
    $result = $conn->query($sql);

    echo "<table border='1'>
    <tr bgcolor='yellow'>
    <th>Passenger ID</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>PNR Number</th>
    <th>Date Of Travel</th>
    <th>Coach</th>
    <th>Seat Number</th>
    <th>Train Number</th>
    <th>Train Name</th>
    <th>From</th>
    <th>To</th>
    <th>Status</th>
    <th>Station Number</th>
    <th>Arrival Time</th>
    <th>Buffer Time</th>
    </tr>";
    // passenger.p_id,passenger.f_name,passenger.m_name,passenger.last_name,ticket.pnr,ticket.date_of_travel,ticket.coach,ticket.seatno,train.no,train.name,train.source,train.destination,train.status,station.s_no,station.s_name,station.arrival_time,station.buffer_time from passenger
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr bgcolor='white'>";
            echo "<td>" . $row['p_id'] . "</td>";
            echo "<td>" . $row['f_name'] . "</td>";
            echo "<td>" . $row['m_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['pnr'] . "</td>";
            echo "<td>" . $row['date_of_travel'] . "</td>";
            echo "<td>" . $row['coach'] . "</td>";
            echo "<td>" . $row['seatno'] . "</td>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['source'] . "</td>";
            echo "<td>" . $row['s_name'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['s_no'] . "</td>";
            echo "<td>" . $row['arrival_time'] . "</td>";
            echo "<td>" . $row['buffer_time'] . "</td>";
            
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