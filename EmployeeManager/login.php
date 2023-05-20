<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Manager</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<div class="header">
		<h1>Employee Manager</h1>
	</div>
	<form method="post" action="login.php">
		<h2>Login</h2>
		<?php echo display_error(); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not Yet a Member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>