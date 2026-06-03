<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenny</title>
</head>
<body bgcolor=skyblue>                       >
   <center>
    <h1> <u> WELCOME TO THE DASHBOARD<u/></h1>
    <h2> DHT SENSOR TABLE   </h2>
    <table border=5px>
        <th>id</th><th>temperature</th><th>humidity</th><th>status</th><th>recorded_at</th>
        <?php
        include "connect.php";
        $res = $conn->query("SELECT * FROM `data_sensor`");
        // $result=$conn->query('SELECT * FROM dht');
        while($row=$res->fetch_assoc()){
            echo "<tr>
            <td> {$row['id']} </td> 
            <td> {$row['temperature']} </td>
             <td> {$row['humidity']} </td>
            <td> {$row['status']} </td>
             <td> {$row['recorded_at']} </td>
            </tr>";
        }
        ?>
</table>
   </center> 
</body>
</html>