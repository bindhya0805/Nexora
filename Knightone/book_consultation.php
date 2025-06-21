<?php
// Connect to PostgreSQL
$conn = pg_connect("host=localhost dbname=sample user=postgres password=0805");

if (!$conn) {
  die("Connection failed: " . pg_last_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data safely
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $date = $_POST['date'];
  $time = $_POST['time'];
  $people = intval($_POST['people']);
  $message = htmlspecialchars($_POST['message']);

  // SQL Insert Query
  $query = "INSERT INTO appointments (name, email, phone, date, time, people, message) 
            VALUES ('$name', '$email', '$phone', '$date', '$time', $people, '$message')";

  $result = pg_query($conn, $query);

  if ($result) {
    echo "<script>alert('Consultation booked successfully!'); window.location.href='index.php#contact';</script>";
  } else {
    echo "Error: " . pg_last_error($conn);
  }

  pg_close($conn);
}
?>
