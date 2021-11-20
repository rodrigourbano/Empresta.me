<?php

if(session_start() === PHP_SESSION_NONE) {
    session_start();
}

if(empty($_SESSION['nome'])) {
    header("location: index.php");
}