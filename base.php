<?php
$username="localhost";
$email="root";
$password="";
$dbname="se1";

$conn = mysqli_connect($username, $email, $password, $dbname);

if (!$conn) {
    echo "connection failed";
}


?>