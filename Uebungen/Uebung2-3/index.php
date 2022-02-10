<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} 
catch(PDOException $e) 
{
  echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM customers";
echo "<table>";
echo "<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Bestellungen</th></tr>";
foreach ($conn->query($sql) as $row) 
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td><a href='bestellungen.php?id=" . $row['id'] . "'>Link</a></td>";
    echo "</tr>";
}
echo "</table>";
?>