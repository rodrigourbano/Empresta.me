<?php
include('includes/verificaLogado.php');
include('includes/scripts.php');
include('libs/start.php');

if(isset($_POST["submit"])) {
    
    $recebedor = $_POST["recebedor"];
    $objeto = $_POST["objeto"];
    $dataMax = $_POST["dataMax"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $database->insert("emprestimos", [
        "nomeRecebe" => $recebedor,
        "emailContato" => $email,
        "telContato" => $telefone,
        "dataLimite" => $dataMax,
        "objeto" => $objeto,
    ]);
}
?>

<body>
  <?php 
    include('includes/navbar.php');
    ?>
    <div class="cadastro-div text-white">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">Emprestimo cadastrado com sucesso!</h3>
    </div>
  </body>