<?php
session_start();
?>

<?php
include('includes/config.php');
$email=$_SESSION['login'];
$sql="SELECT * from tblbilling where email=:email";
$query = $dbh -> prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
?>
<div class="agile-tables">
<div class="w3l-table-info">
<table border=1>
<tr><th>Email</th>
<th>Hotel Entry fee</th>
<th>Food Price</th>  
<th>Drinks Price</th>
<th>lodging fee</th>
<th>Destination price</th>
<th>TOTAL</th>
</tr>

<?php foreach($results as $result)
{	?>	
  <tr>
  <td><?php echo htmlentities($result->email);?></td>
   <td><?php echo htmlentities($result->entryfee);?></td>
  <td><?php echo htmlentities($result->food);?></td>
  <td><?php echo htmlentities($result->drinks);?></td>
  <td><?php echo htmlentities($result->lodging);?></td>
  <td><?php echo htmlentities($result->destinationprice);?></td>
  <td><?php echo htmlentities($result->total);?></td>


    </tr>
<?php }?>
</table>
<a class="nav-link" href="tourists.php">Back</a>