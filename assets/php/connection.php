<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bus_booking";
    $conn = new mysqli($server_name, $username, $password, $dbname);
    if ($conn->connect_error) {
        die('failded' . $conn->connect_error);
    }
?>