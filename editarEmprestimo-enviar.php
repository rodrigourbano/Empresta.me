<?php
session_start();
include('libs/start.php');
include('includes/verificaLogado.php');
include('includes/scripts.php');


if(isset($_POST["submit"])) {
    
    $recebedor = $_POST["recebedor"];
    $objeto = $_POST["objeto"];
    $dataMax = $_POST["dataMax"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $idEmprestimo = $_POST["idEmprestimo"];

    $database->update("emprestimos", ['nomeRecebe' => $recebedor], ["id" => $idEmprestimo]);
    $database->update("emprestimos", ['emailContato' => $email], ["id" => $idEmprestimo]);
    $database->update("emprestimos", ['telContato' => $telefone], ["id" => $idEmprestimo]);
    $database->update("emprestimos", ['dataLimite' => $dataMax], ["id" => $idEmprestimo]);
    $database->update("emprestimos", ['objeto' => $objeto], ["id" => $idEmprestimo]);

}

$_SESSION['editStatus'] = "Sucesso!";
header("Location: dash.php");
?>