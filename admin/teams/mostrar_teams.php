<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mostrar tean </title>
</head>
<body>


<table   >
<tr style="background:#337ab7; color:WHITE;">

    <td>team_id</td>
    <td>team_name</td>
    <TD>workgroup</TD>
    <td>leader_id</td>
   
    
    <td>editar</td> 
    
</tr>





<?php

include("../conexion.php");

$consulta=$con->query("SELECT * FROM teams ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table-info">

<td><?php echo $row['team_id'] ?></td>
<td><?php echo $row['team_name'] ?></td>
<td><?php echo $row['workgroup'] ?></td>
<td><?php echo $row['leader_id'] ?></td>





<TD><a href=" update_teams.php ? id=<?php echo $row['team_id'] ?>" class="btn btn-info" >Editar</a></TD>
<?php
}

?>


</table>


  
</body>
</html>