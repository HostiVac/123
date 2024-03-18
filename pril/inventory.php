<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy App - Inventory Management</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Pharmacy App - Inventory Management</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="order_form.php">Place an Order</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Inventory Management</h2>
        <p>This is the inventory management page where you can manage medicines.</p>
    </main>
    <footer>
        <p>&copy; 2024 Pharmacy App</p>
    </footer>
</body>
</html>