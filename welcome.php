<?php
session_start();

if (!isset($_SESSION["username"]) || $_SESSION["username"] !== "admin123") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome Page</title>
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <p>Congrats! You have successfully got it!</p>
    </div>
</body>
</html>
