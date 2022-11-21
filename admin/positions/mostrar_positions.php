<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mostrar teams </title>
</head>
<body>
<a href="/LOGIN ROLES/admin/positions/formulario_positions.php">formulario</a>

<table   >
<tr style="background:#337ab7; color:WHITE;">

    <td>positions_id</td>
    <td>name</td>
    <TD>company</TD>
    <td>company_id</td>
   
    
    <td>editar</td> 
    
</tr>





<?php

include("../conexion.php");

$consulta=$con->query("SELECT * FROM positions ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table-info">

<td><?php echo $row['positions_id'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['company'] ?></td>
<td><?php echo $row['company_id'] ?></td>





<TD><a href="modificar_position.php? id=<?php echo $row['positions_id'] ?>" class="btn btn-info" >Editar</a></TD>
<?php
}

?>


</table>


  
</body>
</html>