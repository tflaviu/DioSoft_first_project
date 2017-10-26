<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
    <body>
    <?php
        include_once "connect.php";
        $db = dbConnect();

        $sql = "SELECT first_name FROM users WHERE email='turcut.flv@gmail.com'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $row = $result -> fetch_assoc();
            echo $row['first_name'];
        }
    ?>
    </body>
</html>