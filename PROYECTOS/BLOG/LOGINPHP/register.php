<?php
session_start();
require 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $role_id = 1;

    if (!empty($username) && !empty($email) && !empty($password)) {
        $hash = password_hash($password, PASSWORD_BCRYPT);

 
        $check = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $check->execute([$username, $email]);
        if ($check->rowCount() > 0) {
            $_SESSION['error'] = "El usuario o email ya existe.";
        } else {
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role_id) VALUES (?, ?, ?, ?)");
            $stmt->execute([$username, $email, $hash, $role_id]);
            $_SESSION['success'] = "¡Registro exitoso! Pulsa login para acceder.";
        }
    } else {
        $_SESSION['error'] = "Todos los campos son obligatorios.";
    }
    header("Location: index.php");
    exit();
}
?>
