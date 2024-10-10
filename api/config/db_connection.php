<?php
/* 
database connection
Developer: Mario
*/
$host = "localhost";
$username = "postgres";
$password = "unicesmag";
$dbname = "beta";
$port = "5432";

$data_connection = "host = $host user = $username password = $password dbname = $dbname port = $port"; 

$conn = pg_connect($data_connection);

if (!$conn) {
    die("Connection failed: ". pg_last_error());
} else {
    echo "Connected successfully";
}

//pg_close($conn);

?>