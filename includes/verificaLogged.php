<?php

$logged = $_SESSION['logged'] ?? NULL;

if (!logged) die("Por favor realize o login!");

?>