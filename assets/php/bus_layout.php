<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: log_in.php");
  exit();
}
include_once('connection.php');
$sql = "SELECT * FROM `bus_seats`";
$result = $conn->query($sql);
$result = $conn->query($sql);
if (!$result) {
  die("failed: " . $conn->connect_error);
}
foreach ($result as $row) {
    
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Seat's</title>
  <link rel="stylesheet" href="../css/bus_layout.css">
</head>

<body>

  <div class="plane">
    <h1>Bus Seat's</h1>
    <ol class="cabin fuselage">
      <!-- <li class="row row--1">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" name="1a" id="1A" />
            <label for="1A">1A</label>
          </li>
          <li class="seat">
            <input type="checkbox" name="1b" id="1B" />
            <label for="1B">1B</label>
          </li>
          <li class="seat">
            <input type="checkbox" name="1c" id="1C" />
            <label for="1C">1C</label>
          </li>
          <li class="seat">
            <input type="checkbox" disabled id="1D" />
            <label for="1D">Occupied</label>
          </li>
          <li class="seat">
            <input type="checkbox" name="1e" id="1E" />
            <label for="1E">1E</label>
          </li>
        </ol>
      </li> 
      <li class="row row--2">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="2A" />
            <label for="2A">2A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2B" />
            <label for="2B">2B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2C" />
            <label for="2C">2C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2D" />
            <label for="2D">2D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2E" />
            <label for="2E">2E</label>
          </li>
        </ol>
      </li>
      <li class="row row--3">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="3A" />
            <label for="3A">3A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3B" />
            <label for="3B">3B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3C" />
            <label for="3C">3C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3D" />
            <label for="3D">3D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3E" />
            <label for="3E">3E</label>
          </li>
        </ol>
      </li>
      <li class="row row--4">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="4A" />
            <label for="4A">4A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4B" />
            <label for="4B">4B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4C" />
            <label for="4C">4C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4D" />
            <label for="4D">4D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4E" />
            <label for="4E">4E</label>
          </li>

        </ol>
      </li>
      <li class="row row--5">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="5A" />
            <label for="5A">5A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5B" />
            <label for="5B">5B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5C" />
            <label for="5C">5C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5D" />
            <label for="5D">5D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5E" />
            <label for="5E">5E</label>
          </li> 
      </li> -->
    </ol>
  </div>
  <div class="total-amount" style="text-align: center; margin-top: 20px;">
    <h2>Total Amount: <span class="total-amount-value">0</span> Rs</h2>
    <button class="payment-button" onclick="generateInvoice()">Payment</button>
  </div>
  <script src="../js/bus_layout.js"></script>
</body>

</html>

</body>

</html>