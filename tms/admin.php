<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <title>KARA Tours AdminLogin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
<body style="background-color: cyan;">

	
<a class="nav-link" href="index.php">HOME</a>

<p><br/></p>
	<div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
        <div style="width:400px;">
                        <div style="width:400px;">
                        <div class='b' >
        
<form action="" method="POST" id="form" class="px-4 py-3">
<label>Username <input type="text" name="username" id="form_username" class="form-group"></label><br><br>
<label>Password <input type="password" name="password" id="form_pass" class="form-group"></label><br><br>
<input type="submit" name="submit" value="Login">
</form>
</div>
</div>
</div>
</div>
</div>


</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	if ($Username=="Tours" & $Password=="admin") {
		header('refresh:0;url=ad.php');
		# code...
	} else {
		echo "Wrong credentials";
	}
		# code...		
}
?>