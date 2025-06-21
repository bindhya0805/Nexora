<?php
// Include your PostgreSQL connection file
include("db.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize the input data
    $name = pg_escape_string($conn, $_POST['name']);
    $designation = pg_escape_string($conn, $_POST['designation']);
    $message = pg_escape_string($conn, $_POST['message']);
    $rating = intval($_POST['rating']);

    // Insert query
    $sql = "INSERT INTO public.testimonials (name, designation, message, rating)
            VALUES ('$name', '$designation', '$message', $rating)";

    // Execute query
    $result = pg_query($conn, $sql);

    // Feedback to user
    if ($result) {
        echo "<script>alert('Feedback submitted successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Failed to submit feedback.'); window.location.href='index.php';</script>";
    }
}
?>
