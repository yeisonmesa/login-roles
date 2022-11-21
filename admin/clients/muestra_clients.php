<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mostrar clients </title>
</head>
<body>

<a href="/LOGIN ROLES/admin/clients/clients.php">atras</a>
<table   >
<tr style="background:#337ab7; color:WHITE;">

    <td>id clients</td>
    <td>name</td>
    <TD>level</TD>
    <td>location</td>
   
    


    <td>editar</td> 
    
</tr>





<?php

include("../conexion.php");

$consulta=$con->query("SELECT * FROM clients ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table-info">

<td><?php echo $row['ï»¿client_id'] ?></td>
<td><?php echo $row['client_name'] ?></td>
<td><?php echo $row['level'] ?></td>
<td><?php echo $row['location'] ?></td>





<TD><a href=" modificar_client.php? id=<?php echo $row['ï»¿client_id'] ?>" class="btn btn-info" >Editar</a></TD>
<?php
}

?>


</table>


  
</body>
</html>