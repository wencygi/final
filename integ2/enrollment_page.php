<?php
// Include the database connection file
require 'db.php';

// Fetch student data for dropdown
$query = "SELECT id, name FROM students";
$stmt = $pdo->query($query);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enrollment Page</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
        table { width: 100%; }
        #subjectTable { display: none; margin-top: 20px; }
    </style>
    <script>
        function showSubjects(course) {
            // Get subject table and rows for specific courses
            const subjectTable = document.getElementById('subjectTable');
            const bsitSubjects = document.getElementById('bsitSubjects');

            if (course === 'BSIT') {
                subjectTable.style.display = 'table';
                bsitSubjects.style.display = 'table-row-group';
            } else {
                subjectTable.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <h2>Student Enrollment</h2>

    <form action="process_enrollment.php" method="post">
        <label for="student">Student Name:</label>
        <select id="student" name="student_id" required>
            <option value="">Select Student</option>
            <?php foreach ($students as $student): ?>
                <option value="<?php echo htmlspecialchars($student['id']); ?>">
                    <?php echo htmlspecialchars($student['name']); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="academic_year">Academic Year:</label>
        <select id="academic_year" name="academic_year" required>
            <option value="2022-2023">2022-2023</option>
            <option value="2023-2024">2023-2024</option>
        </select><br><br>

        <label for="course">Course:</label>
        <select id="course" name="course" onchange="showSubjects(this.value)" required>
            <option value="">Select Course</option>
            <option value="BSIT">BSIT</option>
            <option value="HTM">HTM</option>
            <option value="CE">CE</option>
        </select><br><br>

        <h3>List of Subjects</h3>
        <table id="subjectTable">
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Description</th>
                    <th>Schedule</th>
                </tr>
            </thead>
            <tbody id="bsitSubjects">
                <tr>
                    <td>CCPRGG2L</td>
                    <td>Intermediate Programming</td>
                    <td>M 9am - 1pm</td>
                </tr>
                <tr>
                    <td>CTINPRGL</td>
                    <td>Integrative Programming and Technologies</td>
                    <td>TH 1pm-3:40pm / F 1-5pm</td>
                </tr>
            </tbody>
        </table><br>
    </form>
</body>
</html>
