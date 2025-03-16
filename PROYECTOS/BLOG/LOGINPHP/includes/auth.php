<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

function isModerator() {
    return $_SESSION['user']['role_id'] == 2;
}
?>
