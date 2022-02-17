<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

$conn = null;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

$id = $_GET['id'];

if (!$id) {
  die('Keine ID vorhanden');
}

$params = [
  ':id' => $id
];

$statement = $conn->prepare("SELECT customer_id FROM orders WHERE orders.id = :id;");
$statement->execute($params);
$customerId = $statement->fetch()['customer_id'];

$statement = $conn->prepare("DELETE FROM order_details WHERE order_details.order_id = :id;");
$statement->execute($params);

$statement = $conn->prepare("DELETE FROM invoices WHERE invoices.order_id = :id;");
$statement->execute($params);

$statement = $conn->prepare("DELETE FROM orders WHERE orders.id = :id;");
$statement->execute($params);

header("Location: http://127.0.0.1:8000/bestellungen.php?id=$customerId");
?>