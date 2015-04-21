<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web Tech Flash Card</title>
		<link rel="stylesheet" href="css/style2.css" type="text/css">
	</head>
	
	<body>
		<div class="block">
			<div class="header">
				<div class="header2">
					<h2>Login</h2>
				</div>
				
			</div>
			
			<div class="login-signup">
				<div class="form">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<input type="text" name="username" placeholder="username...">
						<input type="text" name="password" placeholder="password...">
						<p><input type="submit" value="Log In"></p>
					</form>
					<input type="button" value="Sign Up">
				</div>
				
				<div class="connect">
					<h4>or connect with</h4>
					<img src="images/social-facebook-box-blue-icon.png" width="40px" height="40px">
					<img src="images/Google_Plus_logo.png" width="34px" height="34px">
				</div>
			</div>
			
		</div>
	</body>
</html>