<?php
session_start(); 

require 'db.php'; 

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uploadsDir = __DIR__ . '/uploads/';
if (!file_exists($uploadsDir)) {
    mkdir($uploadsDir, 0777, true); 
}

if (isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $section = $_POST['section'];
    $photoPath = '';

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photoPath = $uploadsDir . basename($_FILES['photo']['name']);
        
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath)) {
            die("Error uploading the file. Check the uploads directory permissions.");
        }
    } else {
        die("No file uploaded or there was an upload error.");
    }

    $sql = "INSERT INTO students (name, gender, course, year_level, section, photo) 
            VALUES (:name, :gender, :course, :year_level, :section, :photo)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':name' => $name,
            ':gender' => $gender,
            ':course' => $course,
            ':year_level' => $year_level,
            ':section' => $section,
            ':photo' => basename($_FILES['photo']['name']) 
        ]);

        $_SESSION['success_message'] = "New student added successfully!";
        header("Location: students.php"); 
        exit; 
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Form not submitted correctly.";
}
?>
