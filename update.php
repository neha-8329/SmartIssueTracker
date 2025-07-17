<?php
include 'db.php';
$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE issues SET status='$status' WHERE id=$id";
mysqli_query($conn, $sql);
header("Location: index.php");
?>
