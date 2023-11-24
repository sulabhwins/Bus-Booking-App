<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: log_in.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>
    <link rel="stylesheet" href="../css/afterlog_in.css">
    <link rel="stylesheet" href="../css/own.css">
    <link rel="stylesheet" href="../css/botcss.css">
</head>
<body>
    <header><?php include_once('nav_bar.php'); ?></header>
    <div class="container">
        <h2>Bus Booking</h2>
        <form id="bookingForm" action="book.php" method="post" onsubmit="return validateForm()">
            <label for="origin">Origin:</label>
            <select name="origin" id="origin" required>
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
                <option value="city3">City 3</option>
                <option value="city4">City 4</option>
            </select>
            <label for="destination">Destination:</label>
            <select name="destination" id="destination" required>
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
                <option value="city3">City 3</option>
                <option value="city4">City 4</option>
            </select>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
            <button type="submit">Book Now</button>
        </form>
    </div>
    <footer><?php include_once('footer.php') ?></footer>
    <script src="../js/botjs.js"></script>
    <script src="../js/own.js"></script>
    <script src="../js/afterlog_in.js"></script>
</body>
</html>
