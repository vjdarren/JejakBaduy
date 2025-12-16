<?php
include '../function/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare the SQL statement
    $sql = "SELECT * FROM tb_form WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        echo "<p><strong>Name:</strong> " . htmlspecialchars($row["firstName"] . " " . $row["lastName"]) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";
        echo "<p><strong>Subject:</strong> " . htmlspecialchars($row["subject"]) . "</p>";
        echo "<p><strong>Message:</strong></p>";
        echo "<div style='max-height: 200px; overflow-y: auto;'>" . nl2br(htmlspecialchars($row["message"])) . "</div>";
        echo "<p><strong>Submission Date:</strong> " . $row["submission_date"] . "</p>";
    } else {
        echo "<p>No details found for this submission.</p>";
    }
    
    $stmt->close();
} else {
    echo "<p>Invalid request. No ID provided.</p>";
}

$conn->close();
?>