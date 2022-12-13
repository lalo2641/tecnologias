<?php
  include ('conexion.php');
  
  $sql = "SELECT * FROM country WHERE Continent='south america' or Continent='north america' "; 
  $query = $con -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  if($query -> rowCount() > 0)   { 
    echo "<table border='1px'>";
    echo "<tr>
      <td>Name</td>
      <td>Continent</td>
     
    </tr>";
    foreach($results as $result) { 
      echo "<tr>
        <td>" . $result->Name . "</td>
        <td>" . $result->Continent . "</td>
     
      </tr>";
    }
    echo "</table>";
  }
?>