<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM northwind.customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo $result->num_rows . " Resultate<br>";
    foreach($result as $item){
    echo $item['first_name'] . '<br>';
    }
    var_dump($result);
    } else {
    echo "Keine Resultate vorhanden";
    }
mysqli_close($conn);
?>