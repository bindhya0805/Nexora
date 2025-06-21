<?php
$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=sample";
$credentials = "user=postgres password='0805'";

$conn = pg_connect("$host $port $dbname $credentials");


?>