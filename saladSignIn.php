<!DOCTYPE html>
<!DOCTYPE html>
<?php 
	require_once('mysqlclass.php');
?>

<html>
<head>
</head>
<body>
<div>
	<div>
		<form method='post' action='authenticate.php'>
			Username: <input name='username' type='text'>
			Password:<input name='password' type='password'>
			<button type='submit' name='login' value='0'>Log In</button>
		</form>
	<div>
</div>
</body>
</html>
<?php
	$SQL = new mySQL();
	$SQL->connect('localhost','salad_business','root');
	if(isset($_POST['password']) && isset($_POST['username'])) {
		$rowCount = $SQL->select("SELECT email, password FROM users WHERE email=? VALUES (?)",[$_POST['email']]);
		if($rowCount->rowCount()==0) {
			echo("Invalid email entered.");
		}
		else 
		{
			$user = $rowCount->fetch();
			if(password_verify($_POST['password'],$user['password'])) {
				echo("Valid info. Signing in.");
			}
			else {
				echo("Invalid password. Try again.");
			}
		}
	}