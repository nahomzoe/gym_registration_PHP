<?php
$host ='db';
$dbname ='loginapp'; //database name
$dbuser = 'root';//db user
$dbpass = 'lionPass';// db password

// connect to database two way 1.PDO 2.MySQLI

$connection = new mysqli($host,$dbuser,$dbpass,$dbname);
?>