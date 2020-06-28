<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{
$HName=$_POST['hname'];
$HLocation=$_POST['hlocation'];
$HAddress=$_POST['haddress'];
$HFeatures=$_POST['hfeatures'];
$HPrice=$_POST['hprice'];
$sql="INSERT INTO  tblhotels(HotelName,HLocation,HAddress,HFeatures,HotelPrice) VALUES(:hname,:hlocation,:haddress,:hfeatures,:hprice)";
$query = $dbh->prepare($sql);
$query->bindParam(':hname',$HName,PDO::PARAM_STR);
$query->bindParam(':hlocation',$HLocation,PDO::PARAM_STR);
$query->bindParam(':haddress',$HAddress,PDO::PARAM_STR);
$query->bindParam(':hfeatures',$HFeatures,PDO::PARAM_STR);
$query->bindParam(':hprice',$HPrice,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Record Successfully Added ";
header('location:managehotels.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:managehotels.php');
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
												<form name="addhotel" method="post">
													<h3>Add Hotel </h3>
					

				<input type="text" value="" placeholder="Hotel Name" name="hname" autocomplete="off" required="" font-color="black">
				<input type="text" value="" placeholder="Location" name="hlocation" autocomplete="off"  required="">	
		 	 <input type="text" value="" placeholder="Address" name="haddress" autocomplete="off" required="">
			  <input type="text" value="" placeholder="Features" name="hfeatures" autocomplete="off" required="">
			  <input type="text" value="" placeholder="Hotel Price" name="hprice" autocomplete="off" required="">
	
													<input type="submit" id="submit" name="submit" value="ADD HOTEL"><a class="nav-link" href="managehotels.php">BACK</a>
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