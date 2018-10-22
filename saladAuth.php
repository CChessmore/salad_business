<!DOCTYPE html>
<html>

<head>Practice with Forms</head>

<body>
<form method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for='inputUser'>Username:</label>
<input type='text' name = 'username' id='inputUser'>
<input type='submit' value='submit'>
</form>
</body>

</html>

<?php
$success = false;
	$users = array(
				array('username'=>'johnjacob','password'=>'12346'),
				array('username'=>'louisxiv','password'=>'french'),
				array('username'=>'frank_furter','password'=>'mustard'),
				array('username'=>'cleverpun','password'=>'pun'),
				array('username'=>'bread','password'=>'butter')
			);
	if(isset($_POST['username'])) {
		for($i=0;$i<count($users);$i++) {
			if($_POST['username']==$users[$i]['username']) {
				echo 'Successul Login!';
				$success = true;
				break;
			}

		}
		if(!$success) {
		echo 'Fail';
		}
	}