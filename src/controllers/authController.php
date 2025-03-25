<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
header("Content-Type: application/json");

require __DIR__ . "/../../config/database.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Invalid request method"]);
    exit();
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    echo json_encode(["error" => "Email and Password are required"]);
    exit();
}

try {
    $stmt = $pdo->prepare("SELECT * FROM librarians WHERE email = ?");
    $stmt->execute([$email]);
    $librarian = $stmt->fetch();

    if ($librarian && password_verify($password, $librarian['password'])) {
        $_SESSION['librarian_id'] = $librarian['librarian_id'];
        $_SESSION['librarian_name'] = $librarian['name'];

        echo json_encode(["success" => true]);
        exit();
    } else {
        echo json_encode(["error" => "Invalid email or password"]);
        exit();
    }
} catch (Exception $e) {
    echo json_encode(["error" => "Server error, please try again later"]);
    exit();
}
?>
