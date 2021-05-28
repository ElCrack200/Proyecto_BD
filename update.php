<?php
include 'db.php';
$id = $_POST['id'];
$word=$_POST['word'];
$mean=$_POST['mean'];
$category=$_POST['category'];
$sql="update contenedor set name='$word', score='$mean', category='$category' where id='$id'";
$result=$conn->query($sql);
$conn->close();
header("location: index.php");
?>