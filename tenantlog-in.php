<?php
session_start();
include "base.php";
if (isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate ($_POST['email']);
    $password = validate ($_POST['password']);

    if(empty($email)){
        header("Location: index.php?error=Email is Required");
        exit;
    } else if(empty($password)){
        header("Location: index.php?error=Password is Required");
        exit;
    } else { 
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] === $password){
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: tenant_dashboard.php?");
                exit;
            }else{
                header("Location: index.php?error=Your password or email is incorrect ");
                exit;
            }
        }else{
            header("Location: index.php?error=Your password or email is incorrect ");
            exit;
        }
    }


} else {
    header("location: index.php");
    exit;
}
?>