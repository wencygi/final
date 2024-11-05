<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Student</title>
</head>
<body>
    <h2>Create a New Student</h2>

    <?php
    session_start();
    if (isset($_SESSION['success_message'])) {
        echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
        unset($_SESSION['success_message']); 
    }
    ?>

    <form action="add_student.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Student Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <br>

        <div>
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <br>

        <div>
            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="BSIT">BSIT</option>
                <option value="HTM">HTM</option>
                <option value="CE">CE</option>
            </select>
        </div>
        <br>

        <div>
            <label for="year_level">Year Level</label>
            <select id="year_level" name="year_level" required>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
            </select>
        </div>
        <br>

        <div>
            <label for="section">Section</label>
            <select id="section" name="section" required>
                <option value="ITE101">ITE101</option>
                <option value="ITE201">ITE201</option>
                <option value="ITE202">ITE202</option>
            </select>
        </div>
        <br>

        <div>
            <label for="photo">Profile Image</label>
            <input type="file" id="photo" name="photo" required>
        </div>
        <br>

        <div>
            <button type="submit" name="add_student">Add Student</button>
        </div>
    </form>
</body>
</html>
