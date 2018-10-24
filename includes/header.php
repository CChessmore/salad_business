<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
$abs_url = "http://localhost:8080/travel_in_japan/";
date_default_timezone_set('America/Chicago');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title_name ?></title>
    <link rel="icon" href="<?=$abs_url?>img/tripadvisor_icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=$abs_url?>css/main.css" />
</head>
<body>

<nav class="navbar navbar-light" style="background-color:#49a781;">
  <!-- Navbar content -->
    <div class = "container">
        <ul class="nav">
            <li class="nav-item">
                <a class="navbar-brand" href="<?=$abs_url?>index.php">
                <img src="<?=$abs_url?>img/tripadvisor_logo.png" alt="logo" >
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class = "container">
