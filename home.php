<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/home-style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<?php
session_start();
include_once "php/connect.php";

$db = dbConnect();
?>
   <a class="logout" href="php/logout.php">Logout</a>
</body>
</html>