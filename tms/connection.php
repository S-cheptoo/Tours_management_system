<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Error in connection".mysqli_connect_error();
}
$db=mysqli_select_db($con,'tms');
if (!$db){
echo "No database selected";
}
?>