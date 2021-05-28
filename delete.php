<?php
    include 'db.php';
    $id = $_GET['id'];
    $sql="delete from contenedor where id=$id";
    $result=$conn->query($sql);
    $conn->close();
    header("location: index.php");
?>