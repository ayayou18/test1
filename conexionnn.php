<?php
$servername = "mysql-shaib18.alwaysdata.net";
$username = "shaib18";
$password = "Amel-1126";
$dbname = "shaib18_testdb";
$puerto = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$puerto);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["edad"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
