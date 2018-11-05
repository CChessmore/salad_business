<?php
session_start();
session_destroy();
require_once($_SERVER['DOCUMENT_ROOT'].'/salad_business/settings.php');
header('location: '.APP_URL.'/signedin.php');

?>