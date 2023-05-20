<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User-Employee Manager</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<div class="header">
		<h1>Employee Manager</h1>
		<p>Employee Page</p>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<h2>Home Page</h2>
		<div class="profile_info">
			<img src="images/avatar.png"  >
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
						&nbsp; <a href="list.php"> Employee List</a>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>