<?php
include 'connection.php'; // Include database connection file

// Fetch feedback data from the database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='review-card'>";
        echo "<h3>" . $row["first_name"] . " " . $row["last_name"] . "</h3>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Date of Visit: " . $row["visit_date"] . "</p>";
        echo "<p>Rating: " . $row["rating"] . "</p>";
        echo "<p>Feedback: " . $row["feedback"] . "</p>";
        echo "<p>How Did You Hear: " . $row["how_did_you_hear"] . "</p>";
        echo "<p>Recommendation: " . $row["recommendation"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No feedback available.";
}

$conn->close();
?>
