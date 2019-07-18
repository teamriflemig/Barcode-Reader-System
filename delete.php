<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM validation WHERE ID=:id';
$stmt = $conn->prepare($sql);
if ($stmt->execute([':id' => $id])) {
  header("Location: controlaccount.php");
}
