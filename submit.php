<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $visitDate = $_POST["visit_date"];
    $rating = $_POST["rating"];
    $feedback = $_POST["feedback"];
    $howDidYouHear = $_POST["howDidYouHear"];
    $recommendation = isset($_POST["recommendation"]) ? $_POST["recommendation"] : "";

    // Perform database insertion
    $sql = "INSERT INTO feedback (first_name, last_name, email, visit_date, rating, feedback, how_did_you_hear, recommendation)
            VALUES ('$firstName', '$lastName', '$email', '$visitDate', '$rating', '$feedback', '$howDidYouHear', '$recommendation')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";

        // Redirect to display_feedback.php
        header("Location: view_feedback.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // If the form is not submitted, redirect to the main page
    header("Location: index.html");
    exit();
}

$conn->close();
?>
