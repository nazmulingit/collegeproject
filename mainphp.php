<?php
require 'database.php'; // Include the database connection

// Fetch departments from the database
$query = $pdo->query('SELECT * FROM departments');
$departments = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Departments</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to Our College</h1>
        <p>Your source for agricultural and soil science education.</p>
    </section>

    <section class="content">
        <h2>Departments</h2>
        <ul>
            <?php foreach ($departments as $department): ?>
                <li>
                    <h3><?= htmlspecialchars($department['name']) ?></h3>
                    <p><?= htmlspecialchars($department['description']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 College Website. All Rights Reserved.</p>
    </footer>
</body>
</html>
