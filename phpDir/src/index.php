<?php


// The MySQL service named in the docker-compose.yml.
$host = 'db01';
//Database
$db = 'lionDB';
// Database user name
$user = 'lionUser';

//database user password
$pass = 'lionPass';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass,$db);
if (!$conn) {
    die(mysqli_error($conn));
}

?>