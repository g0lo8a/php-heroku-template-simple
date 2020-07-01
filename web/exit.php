<?php
declare(strict_types=1);
session_start();

session_unset();
header('Location: index.php');