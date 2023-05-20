<?php  include('admin/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User-Employee List</title>
	<link rel="stylesheet" type="text/css" href="admin/design2.css">
</head>
<body>
<div class="header">
	<h1>Employee List</h1>
</div>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
	<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

	<table>
		<thead>
			<th>Employee Database</th>
		</thead>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['address']; ?></td>
			</tr>
		<?php } ?>
	</table>

	<form>
		<div class="input-group">
			<button class="btn"><a href="index.php"> Back</a></button>
		</div>
	</form>
</body>
</html>