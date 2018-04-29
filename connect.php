<?php
$connection=mysqli_connect('localhost','root','');
if(!$connection)
{
	die("Database connection failed" . mysqli_error($connection));
}
$selectdb=mysqli_select_db($connection,'demo');
if(!$selectdb)
{
	die("Database selection failed" . mysqli_error($selectdb));
} 
?>