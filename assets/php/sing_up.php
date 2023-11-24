<?php
    include_once('connection.php');
    if(isset($_POST) && !empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO `user_data_busbooking` (`name`, `email`, `password` ) VALUES (?,?,?)");
        $stmt->bind_param('sss', $name, $email, $password);
        $stmt->execute();
        $stmt->close();
        header("Location: log_in.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="../css/sing_up.css">
</head>
<body>
    <form action="?" method="post" id="signupForm" onsubmit="return validateForm()">
         <h2>Signup</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="Signup">
        <h5> Already have an account <a href="sing_up.php">Sign Up</a> </h5>
    </form>
    <script  src="../js/sing_up.js">
    </script>
</body>
</html>
