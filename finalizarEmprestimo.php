<?php

session_start();
$_SESSION['fnStatus'] = "Sucesso!";
include('libs/start.php');
include('includes/verificaLogado.php');

$idEmprestimo = $_GET['id'];
$status = 1;
$dataAtual = date("Y-m-d");
$database->update("emprestimos", ['status' => $status], ["id" => $idEmprestimo]);
$database->update("emprestimos", ['dataDevolucao' => $dataAtual], ["id" => $idEmprestimo]);

header("Location: dash.php");