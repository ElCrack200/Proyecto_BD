<?php
error_reporting(0);
   include 'db.php';
   $sql="select * from contenedor order by word";
   $result= $conn->query($sql);
   //encabezado
   echo "<tr>";
   echo "<td>Palabra</td>";
   echo "<td>Significado</td>";
   echo "<td>Categoría</td>";
   echo "<td>Acciones</td>";
   echo "</tr>";
   //filas
   while($row = $result->fetch_assoc()){
       echo "<tr>";
       if ($row['id'] == $_GET['id']) 
       {
           echo '<form class="form-inline m-2" action="update.php" method="POST">';
           echo '<td><input type="text" class="form-control" name="word" value="'.$row['word'].'"></td>';
           echo '<td><input type="text" class="form-control" name="mean" value="'.$row['mean'].'"></td>';
           echo '<td><input type="text" class="form-control" name="category" value="'.$row['category'].'"></td>';
           echo '<td><button type="submit" class="btn btn-primary">Guardar cambios</button></td>';
           echo '<input type="hidden" name="id" value="'.$row['id'].'">';
           echo '</from>';
       }
       else
       {
           echo "<td bgcolor='#D2FAE4'>" . $row['word'] . "</td>";
           echo "<td bgcolor='#D2FAE4'>" . $row['mean'] . "</td>";
           echo "<td bgcolor='#D2FAE4'>" . $row['category'] . "</td>";
           echo '<td> <a class="btn btn-primary" href="index.php?id=' . $row['id'] . '"role=button">Actualizar</a></td>';
           echo '<td> <a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '"role=button">Eliminar</a></td>';
       }
       echo "</tr>";
   }
   $conn->close();
?>