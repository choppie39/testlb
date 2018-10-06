<?php
$servername = "localhost";
$username = "root";
$password = "Shop_2539";
$dbname = "testp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

$sql = "SELECT Class, Code, Name ,remain FROM stock_d";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Class: " . $row["Class"]. " - Code: " . $row["Code"]. " - Name: " . $row["Name"]." - Remain: " . $row["remain"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
