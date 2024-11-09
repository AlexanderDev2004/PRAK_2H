<?php
// Include database connection file
include_once("data/data.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Prepare delete statement using PDO
$stmt = $pdo->prepare("DELETE FROM users WHERE id=:id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    // After delete, redirect to Home, so that the latest user list will be displayed.
    header("Location:index.php");
    exit();
} else {
    echo "Failed to delete user.";
}
?>
