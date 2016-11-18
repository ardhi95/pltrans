<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('login/processLogin'); ?>" method="post">
		<input type="text" name="username" id="username" placeholder="Username">
		<input type="password" name="password" id="password" placeholder="Password">
		<input type="submit" value="Log In">
	</form>
</body>
</html>