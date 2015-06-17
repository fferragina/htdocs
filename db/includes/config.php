<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Zurich');
define('DBHOST','localhost');
define('DBUSER','efbcfd8_dbuser');
define('DBPASS','efbcfd8_dbuser');
define('DBNAME','efbcfd8_db');
define('DIR','http://www.industrieensemble.ch/db/');
define('SITEEMAIL','info@comedus.com');
try {
	$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
include('classes/user.php');
$user = new User($db);