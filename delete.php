<?php
require_once('connect.php');
$id=$_GET['id'];
$deletesql="DELETE FROM crud WHERE id=$id";
$rr=mysqli_query($connection,$deletesql);
if($rr)
{
	header('location:view.php');
}
else
{
	echo "Failed to delete";
}
?>