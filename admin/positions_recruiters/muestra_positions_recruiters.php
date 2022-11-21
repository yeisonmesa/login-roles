<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mostrar positions the recruiters</title>

</head>
<body>

<a href="/LOGIN ROLES/admin/positions_recruiters/form_position_recruiters.php">atras</a>
<table>
<tr style="background:#337ab7; color:WHITE;">


    <td>id positions recruiters</td>
    <td>recruiters id</td>
    <TD>positions_id</TD>

    <td>editar</td> 
    
</tr>





<?php

include("../conexion.php");

$consulta=$con->query("SELECT * FROM positions_recruiters ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table-info">

<td><?php echo $row['id_positions_recruiters'] ?></td>
<td><?php echo $row['recruiters_id'] ?></td>
<td><?php echo $row['positions_id'] ?></td>

<TD><a href="modificar_positions_recruiters.php? id=<?php echo $row['id_positions_recruiters'] ?>" class="btn btn-info" >Editar</a></TD>
<?php
}

?>


</table>


  
</body>
</html>