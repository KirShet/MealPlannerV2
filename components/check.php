<?php
session_start();

// Проверяем, есть ли сессия администратора
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 'admin') {
    // Если сессии администратора нет, перенаправляем на index.php
    header("Location: index.php");
    exit();
}