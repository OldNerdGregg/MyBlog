<?php
// DSN (Data Source Network)
//$DSN='mysql:host = localhost; dbname=cms4.2.1';
//$ConnectingDB= new PDO($DSN,'root',''); //Root's password is blank, thus ''

$db_host = "127.0.0.1";
$db_name = "cms4.2.1";
$db_user = "root";
$db_pass = "";
$ConnectingDB = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
//$ConnectingDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
