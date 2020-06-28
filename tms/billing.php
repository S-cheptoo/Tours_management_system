<?php
include('includes/config.php');

if($_SERVER['REQUEST_METHOD']=='POST')
{
$Days=$_POST['bdays'];
$Price=$_POST['price'];
$Email=$_POST['email'];
$Hotel=$_POST['hotel'];
$Food=$_POST['food'];
$Drinks=$_POST['drinks'];
$Destination=$_POST['destination'];
$Lodging=$Days*$Price;
$total=$Hotel+$Destination+$Lodging+$Food+$Drinks;
$sql = "INSERT INTO tblbilling(email,hotelprice,num,entryfee,food,drinks,lodging,destinationprice,total)
VALUES (:email,:price,:bdays,:hotel,:food,:drinks,:lodge,:destination,:total)";
$query =$dbh-> prepare ($sql);
$query->bindParam(':email',$Email,PDO::PARAM_STR);
$query->bindParam(':price',$Price,PDO::PARAM_STR);
$query->bindParam(':bdays',$Days,PDO::PARAM_STR);
$query->bindParam(':hotel',$Hotel,PDO::PARAM_STR);
$query->bindParam(':food',$Food,PDO::PARAM_STR);
$query->bindParam(':drinks',$Drinks,PDO::PARAM_STR);
$query->bindParam(':destination',$Destination,PDO::PARAM_STR);
$query->bindParam(':total',$total,PDO::PARAM_STR);
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Billing Successful ";

}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>Kara Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style >
		body{background-color: rgb(0,204,102);}
	</style>
</head>
<body class="">
		<nav class="navbar navbar-expand-lg bg-light">
		<a class="nav-link">Billing<span class="sr-only">(current)</span></a>
<a class="nav-link" href="ad.php">Back</a>
</nav>

<h1>Enter details below</h1>
<label>Enter number of days:<input type="text"name="days" value="1"class="form-control"maxlength="20"></label><br><br>
<label>Enter Hotel price:<input type="text"name="price" value="1"class="form-control"maxlength="20"></label><br><br>

<div class="login-right">
												<form name="bill" method="post">
													<h3>Bill </h3>
					

				<input type="text" value="" placeholder="Email" name="email" autocomplete="off" required="" font-color="black">
				<input type="text" value="" placeholder="HotelPrice" name="price" autocomplete="off"  required="">
                <input type="text" value="" placeholder="Days" name="days" autocomplete="off"  required="">	
		 	 <input type="text" value="" placeholder="entryfee" name="hotel" autocomplete="off" required="">
			  <input type="text" value="" placeholder="food" name="food" autocomplete="off" required="">
        <input type="text" value="" placeholder="drinks" name="drinks" autocomplete="off" required="">
        <input type="text" value=<?php echo "$Lodging"?>>
	          <input type="text" value="" placeholder="DestinationPrice" name="destination" autocomplete="off" required="">
	
													<input type="submit" id="submit" name="submit" value="Bill"><a class="nav-link" href="managedestinations.php">BACK</a>
												</form>

<div class='row'>
  <div class='col-md-1'></div>
  <div class='col-md-10'>
  
<hr>
<footer id="sp-footer-wrapper" class="text-center">
<div class="container">
<div class="row-fluid" id="footer">
<div id="sp-footer1" class="span2">

</div>
</div>
</footer>
</body>