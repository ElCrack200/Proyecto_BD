<?php
include 'db.php';
$sql="delete from contenedor";
$conn->query($sql);
$conn->close();
header("location: index.php");
?>