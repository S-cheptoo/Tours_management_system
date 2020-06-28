<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{
$dName=$_POST['dname'];
$dType=$_POST['dtype'];
$dLocation=$_POST['dlocation'];
$dPrice=$_POST['dprice'];
$dFeatures=$_POST['dfeatures'];
$dDetails=$_POST['ddetails'];

$sql="INSERT INTO  tbldestinations(destinationName,destinationType,destinationLocation,destinationPrice,destinationFeatures,destinationDetails) VALUES(:dname,:dtype,:dlocation,:dprice,:dfeatures,:ddetails)";
$query = $dbh->prepare($sql);
$query->bindParam(':dname',$dName,PDO::PARAM_STR);
$query->bindParam(':dtype',$dType,PDO::PARAM_STR);
$query->bindParam(':dlocation',$dLocation,PDO::PARAM_STR);
$query->bindParam(':dprice',$dPrice,PDO::PARAM_STR);
$query->bindParam(':dfeatures',$dFeatures,PDO::PARAM_STR);
$query->bindParam(':ddetails',$dDetails,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Record Successfully Added ";
header('location:managedestinations.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:managedestinations.php');
}
}
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	
</head>
<body style="background-color:purple;">

											<div class="login-right">
												<form name="adddestination" method="post">
													<h3>Add Destination </h3>
					

				<input type="text" value="" placeholder="Destination Name" name="dname" autocomplete="off" required="" font-color="black">
				<input type="text" value="" placeholder="Type" name="dtype" autocomplete="off"  required="">
                <input type="text" value="" placeholder="Location" name="dlocation" autocomplete="off"  required="">	
		 	 <input type="text" value="" placeholder="Price" name="dprice" autocomplete="off" required="">
			  <input type="text" value="" placeholder="Features" name="dfeatures" autocomplete="off" required="">
			  <input type="text" value="" placeholder="Details" name="ddetails" autocomplete="off" required="">
	
													<input type="submit" id="submit" name="submit" value="Add Destination"><a class="nav-link" href="managedestinations.php">BACK</a>
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											</div>
								</div>
							</section>
					</div>
				</div>
			</div>
			</body>
			</html>