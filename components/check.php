<?php
session_start();

// Проверяем, есть ли сессия администратора
if (!isset($_SESSION['access']) || $_SESSION['access'] != 'admin') {
    // Если сессии администратора нет, перенаправляем на index.php
    header("Location: index.php");
    exit();
}