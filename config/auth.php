<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['usuario_id']);
}

function requireAuth() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

function isAdmin() {
    return isset($_SESSION['nivel']) && $_SESSION['nivel'] === 'admin';
}
?>