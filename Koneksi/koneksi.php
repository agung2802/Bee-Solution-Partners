<?php

$host = "localhost";
$username = "root";
$db = "db_arisan";
$pass = "";

$con = mysqli_connect($host, $username, $pass) or die(mysqli_error());
mysqli_select_db($con, $db);

?>