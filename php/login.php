<?php
/**
 * Created by PhpStorm.
 * User: Flaviu
 * Date: 25.10.2017
 * Time: 12:46
 */

include_once "connect.php";

$db = dbConnect();

if (isset($_POST['login_submit']) && !empty($_POST['login_email'])
    && !empty($_POST['login_password'])) {

    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $sql = "SELECT user_id FROM users WHERE email = '$email' and password = '$password'";
    $result = $db->query($sql);
    $row = mysqli_fetch_assoc($result);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION['loggedEmail'] = $email;
        $_SESSION['loggedIn'] = true;
        header("location: ../home.php");
    } else {
        session_start();
        $_SESSION['error'] = "Your email or password is invalid";
        header("Location: ../index.php");
    }
}
