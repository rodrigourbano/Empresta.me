<?php
include('includes/verificaLogado.php');
include('includes/scripts.php');
session_start();
$_SESSION['delStatus'] = "Sucesso!";
include('libs/start.php');

$idEmprestimo = $_GET['id'];
$database->delete("emprestimos", ["id" => $idEmprestimo]);

header("Location: dash.php");