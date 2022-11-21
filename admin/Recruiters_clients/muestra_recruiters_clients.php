<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mostrar recruiters_clients</title>
</head>
<body>

<a href="/LOGIN ROLES/admin/recruiters_clients/form_recruiter_client.php">atras</a>
<table   >
<tr style="background:#337ab7; color:WHITE;">

    <td>id recruiters clients</td>
    <td>recruiters_id</td>
    <TD>clients id</TD>
    <td>recruiter name</td>
    <td>client name</td>
   
    


    <td>editar</td> 
    
</tr>





<?php

include("../conexion.php");

$consulta=$con->query("SELECT * FROM recruiters_clients ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table-info">

<td><?php echo $row['id_recruiters__clients'] ?></td>
<td><?php echo $row['recruiters_id'] ?></td>
<td><?php echo $row['clients_id'] ?></td>
<td><?php echo $row['recruiter_name'] ?></td>
<td><?php echo $row['client_name'] ?></td>





<TD><a href=" modificar_recruiters_clients.php? id=<?php echo $row['id_recruiters__clients'] ?>" class="btn btn-info" >Editar</a></TD>
<?php
}

?>


</table>


  
</body>
</html>