<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Replace the following line with your authentication logic
    if (authenticate($input_username, $input_password)) {
        $_SESSION["username"] = $input_username;
        header("Location: welcome.php");
        exit();
    } else {
        $error_message = "Invalid login credentials. Please try again.";
    }
}

function authenticate($username, $password) {
    // Replace this with your actual authentication logic
    // Example: Check against a database of users and their hashed passwords
    // If the credentials are correct, return true; otherwise, return false
    if ($username === "admin123" && $password === "beckham123!") {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
