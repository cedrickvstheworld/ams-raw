<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "se1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function createUser($last_name, $first_name, $mid_name, $contact, $occupation, $gender, $email, $password) {
    global $conn;

    $last_name = mysqli_real_escape_string($conn, $last_name);
    $first_name = mysqli_real_escape_string($conn, $first_name);
    $mid_name = mysqli_real_escape_string($conn, $mid_name);
    $contact = mysqli_real_escape_string($conn, $contact);
    $occupation = mysqli_real_escape_string($conn, $occupation);
    $gender = mysqli_real_escape_string($conn, $gender);
    $user_name = mysqli_real_escape_string($conn, $user_name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO `user`( last_name, first_name, mid_name, contact, occupation, gender, email, password) VALUES ('$last_name','$first_name','$mid_name','$contact','$occupation','$gender','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        return true; 
    } else {
        return false; 
    }
}
?>