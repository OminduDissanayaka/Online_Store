<?php
session_start();

require "../assets/db/connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email)) {
    echo "Please Enter Your Email";
} else if (empty($password)) {
    echo "Please Enter Your Password";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email";
} else {

    $rs = Database::search("SELECT * FROM `admin` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "'");

    if($rs->num_rows == 1){

         $data = $rs->fetch_assoc();
         $_SESSION['admin'] = $data;
         echo "Success";

    } else {
        echo "Invalid Email Or Password";
    }
}
