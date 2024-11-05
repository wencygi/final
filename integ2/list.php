<?php
// Include the database connection file
require 'db.php';

// Debugging step: Check the connection
if (!$pdo) {
    die("Database connection failed.");
}

// Fetch student data
$query = "SELECT * FROM students";
$stmt = $pdo->query($query);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Debugging step: Check if data was fetched
if (empty($students)) {
    echo "<p>No students found in the database.</p>";
} else {
    echo "<p>Data fetched successfully.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Students</title>
</head>
<body>
    <h2>List of Students</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Section</th>
                <th>Profile Image</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($students)): ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($student['id']); ?></td>
                        <td><?php echo htmlspecialchars($student['name']); ?></td>
                        <td><?php echo htmlspecialchars($student['gender']); ?></td>
                        <td><?php echo htmlspecialchars($student['course']); ?></td>
                        <td><?php echo htmlspecialchars($student['year_level']); ?></td>
                        <td><?php echo htmlspecialchars($student['section']); ?></td>
                        <td>
                            <?php if (!empty($student['photo'])): ?>
                                <img src="uploads/<?php echo htmlspecialchars($student['photo']); ?>" alt="Profile Image" style="width: 50px; height: 50px;">
                            <?php else: ?>
                                No Image
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No students found in the database.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
