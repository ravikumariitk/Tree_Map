<?php
$servername = "mysql-106604-0.cloudclusters.net:19990";
$username = "admin";
$password = "hlngoPwE";
$dbname = "tree map";
// Create connection
$conn = new mysqli($servername,19990,$username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT CATEGORY";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["CATEGORY"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>