<?php
declare(strict_types=1);
session_start();

function clean($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

if (!empty($_POST)) {
    $name = clean($_POST['name']);
    $_SESSION['name'] = $name;
    header('Location: index.php');
}