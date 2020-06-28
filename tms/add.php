<?php
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>ADMIN</title>
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
<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<a class="nav-link">Admin<span class="sr-only">(current)</span></a>
<a class="nav-link" href="index.php">HOME</a>
<a class="nav-link" href='view.php'>View destinations</a>
</nav>
<h2 align="center">Add destinations:</h2>
<div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
        <div style="width:1500px;">
                        <div style="width:1500px;">
                        <div class='b'>
<form method="POST" action="" class="px-4 py-3">
	<label>destinationId<input type="text" class="form-control" name="id" id="form_id" value=""></label>
	<label>destinationName<input type="text" class="form-control" name="name" id="form_name" value=""></label><br><br>
	<label>destinationType<input type="text" class="form-control" name="type" id="form_type" value=""></label>
		<label>destinationLocation<input type="text" class="form-control" name="location" id="form_location" value=""></label><br><br>
		<label>destinationPrice<input type="text" class="form-control" name="price" id="form_price" value=""></label><br><br>
        <label>destinationFeatures<input type="text" class="form-control" name="features" id="form_features" value=""></label><br><br>
        <label>destinationDetails<input type="text" class="form-control" name="details" id="form_details" value=""></label><br><br>
<input type="submit" name="submit"  value="Add">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<p></p>

<hr>
<footer id="sp-footer-wrapper" class="text-center">
<div class="container">
<div class="row-fluid" id="footer">
<div id="sp-footer1" class="span2">
<span class="copyright">&copy; Copyright 2019 Kara Tours</span>
</div>
</div>
</footer>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$Id=$_POST['id'];
	$Name=$_POST['name'];
$Type=$_POST['type'];
$Location=$_POST['location'];
$Price=$_POST['price'];
$Featuresc=$_POST['features'];
$Details=$_POST['details'];
	$sql="INSERT INTO tbldestinations(destinationId,destinationName,destinationType,destinationlocation,destinationPrice,destinationFeatures,destinationDetails)
    VALUES('$Id','$Name','$Type','$Location','$Price','$Features','$Details')";
$query=mysqli_query($con,$sql);
if ($query) {
	echo "<font color='blue'>destinations added  successfully</font>";
}
else
{
	echo "Error adding destination".mysqli_error($con);
}
}
?>