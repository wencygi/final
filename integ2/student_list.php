<?php
// Include the database connection file
require 'db.php';

// Debug log function
function logMessage($message) {
    file_put_contents('debug_log.txt', date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
}

// Log page load
logMessage("Page loaded.");

// Fetch student data
$query = "SELECT * FROM students";
$stmt = $pdo->query($query);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Log the number of students fetched
logMessage("Fetched " . count($students) . " students.");
?>
