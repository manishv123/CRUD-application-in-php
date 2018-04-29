<?php
require_once('connect.php');
$readsql="SELECT * FROM crud";
$res=mysqli_query($connection,$readsql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD APP</title>
</head>
<body>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th># &emsp;</th>
				<th>Fullname &emsp;</th>
				<th>Email &emsp;</th>
				<th>Extras</th>
			</tr>
			<?php
				while($r=mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['firstname'] . " " . $r['lastname']; ?>&emsp;&emsp;</td>
				<td><?php echo $r['email']; ?>&emsp;&emsp;</td>
				<td><a href="update.php?id=<?php echo $r['id']; ?>">Edit</a> &nbsp; <a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
			</tr>
			<?php } ?>
		</table>
		<br><br><br><br>
		<a href="index.php"><b>Homepage</b></a>
	</div>
</div>
</body>
</html>