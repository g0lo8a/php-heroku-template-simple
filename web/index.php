<?php
declare(strict_types=1);
session_start();
include 'header.php';

if (!empty($_SESSION['name'])) {
    $name = $_SESSION['name'];
    echo "<h1>Привет, $name!</h1>";
    echo '<a href="exit.php"> Выйти</a>';
} else {
    echo "<h1>Привет!</h1>";
    include 'form.html';
}