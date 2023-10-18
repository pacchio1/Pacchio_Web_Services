<?php
include 'class_login.php';
session_start();
$Login = new class_login();
try {
    $Login->Login($_POST['email'], $_POST['password'], 'login.html', 'index.php');

    //Admin Check-in
    if (($Login->getRole($_POST['email'], $_POST['password'])) === "admin") {
        $_SESSION['admin'] = true;
    } else {
        $_SESSION['admin'] = false;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav>

        <a href="login.html">Login</a>
        <a href="logout.php">Logout</a>

    </nav>

</body>

</html>
