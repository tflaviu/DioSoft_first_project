<?php
/**
 * Created by PhpStorm.
 * User: Flaviu
 * Date: 25.10.2017
 * Time: 13:30
 */

include_once "connect.php";

    $db = dbConnect();
    $first_name = $_POST['reg_first_name'];
    $last_name = $_POST['reg_last_name'];
    $email = $_POST['reg_email'];
    $password = $_POST['reg_password'];

    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
    $result = $db->query($sql);

    if ($result) {
        $_SESSION['loggedEmail'] = $email;
        $_SESSION['loggedIn'] = true;
        header("Location: ../home.php");
    } else {
        echo "Error";
    }