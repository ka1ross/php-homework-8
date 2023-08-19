<?php declare(strict_types=1);

session_start();

unset($_SESSION['user_name']);

session_destroy();

header('Location: index.php');