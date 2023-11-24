<?php
    include_once('connection.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $stmt = $conn->prepare("SELECT * FROM `user_data_busbooking` WHERE `email` = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if ($user && $password === $user['password']) {
            session_start();
            $_SESSION['email'] = $user['email']; 
            
            header("Location: afterlog_in.php");
            exit();
        } else {
            echo "Login failed. Please check your email and password.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/log_in.css">
</head>
<body>
    <form name="loginForm" method="post">
        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
        <h5>Don't have an account <a href="sing_up.php">Sign Up</a> </h5>
    </form>
</body>
</html>
