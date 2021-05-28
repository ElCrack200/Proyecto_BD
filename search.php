<?php
$category = $_POST['category'];
$sql = "SELECT * FROM contendor WHERE category LIKE '$category'";
while($row = fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row['word'] . "</td>";
           echo "<td>" . $row['mean'] . "</td>";
           echo "<td>" . $row['category'] . "</td>";
           echo '<td> <a class="btn btn-primary" href="index.php?id=' . $row['id'] . '"role=button">Actualizar</a></td>';
           echo '<td> <a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '"role=button">Eliminar</a></td>';
       }
       echo "</tr>";
    
?>