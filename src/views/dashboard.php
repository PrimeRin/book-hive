<?php
session_start();
require_once "config/database.php"; // Include database

// Check if the user is logged in
if (!isset($_SESSION['librarian_id'])) {
    header("Location: login");
    exit();
}
// <a href="/logoutController">Logout</a> 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UI</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php include 'sidebar.php'; ?>
        <main class="main-content">
            <header class="welcome-header">
                <h1>Hi, Welcome back</h1>
            </header>
            <?php include 'graph.php'; ?>
        </main>
    </div>
</body>
</html>
