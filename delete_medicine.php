<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM medicines WHERE id=$id");

echo "<script>alert('Medicine deleted!'); window.location='admin.php';</script>";
?>
