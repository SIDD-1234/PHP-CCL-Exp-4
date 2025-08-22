<?php
// contact.php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $msg = htmlspecialchars($_POST["message"]);

    $message = "Thank you, $name! We received your message.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <main>
        <?php if ($message): ?>
            <p class="success"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="post" action="contact.php">
            <label>Name:</label>
            <input type="text" name="name" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Message:</label>
            <textarea name="message" required></textarea><br>

            <button type="submit">Send</button>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Student Portal</p>
    </footer>
</body>
</html>
