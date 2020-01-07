<?php
$servername = "db.saleh.cloud";
$username = "app1";
$password = "Saleh112233";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, age FROM details";

$recoeds = $conn->query($sql);

if ($recoeds ->num_rows > 0) {
    while($row = $recoeds ->fetch_assoc()) {
       $data[] = $row;
    }
} else {
   $role-> error= "error";
    print json_encode($role);
}
header("Access-Control-Allow-Origin:*");
header('content-type: application/json; charset=utf-8');

print json_encode($data);
$conn->close();
?>
