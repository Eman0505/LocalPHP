<?php  include('server.php'); 
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Employee Manager</title>
	<link rel="stylesheet" type="text/css" href="design2.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>Employee Manager</h1>
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
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td>
					<a href="manage.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
				</td>
				<td>
					<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<form method="post" action="server.php" >
		<h3>Employee Manager</h3>
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
			<button class="btn"><a href="page.php"> Back</a></button>
		</div>
	</form>
</body>
</html>