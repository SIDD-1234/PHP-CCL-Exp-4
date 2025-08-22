<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Student Portal</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <main>
        <h2>Dashboard</h2>
        <p>This portal helps students manage their courses, attendance, and schedules.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Student Portal</p>
    </footer>
</body>
</html>
