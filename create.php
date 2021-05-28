<?php
    include 'db.php';
    $word=$_POST["word"];
    $mean=$_POST["mean"];
    $category=$_POST["category"];
    $sql="insert into contenedor (word,mean,category) values ('$word','$mean','$category')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>