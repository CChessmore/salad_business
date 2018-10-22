<!DOCTYPE html>
<html>
<head></head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form method="post">
<div>Name: <input type="text" id="name">
<div>Image URL: <input type="text" id="imageURL">
<div>Price: <input type="text" id="price">
<div>Description: <input type="text" id="description">
<div><button type="submit">Submit</button></div>
<a href="saladIndex.php"><button class="btn btn-primary">To Index</button></a>
</form>
</body>
</html>


<?php
if(isset($_POST['name'])) {
	$file_handler=fopen('premade.csv','a');
	fwrite($file_handler,implode(';',[$_POST['name'],$_POST['imageURL'],$_POST['price'],$_POST['description'],"\n"]));
	fclose($file_handler);
}