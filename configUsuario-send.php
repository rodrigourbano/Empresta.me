<?php
include('libs/start.php');
include('includes/verificaLogado.php');
include('includes/scripts.php');

if(isset($_POST["submit"])) {
    
    $userID = $_SESSION["uid"];
    $senha = $_POST["senha"];

 $database->update("users", ['senha' => $senha], ["id" => $userID]);
}
?>

<body>
  <?php 
    include('includes/navbar.php');
    ?>
    <div class="cadastro-div text-white">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">Senha atualizada com sucesso!</h3>
      <img src="./img/undraw/password.svg" style="height: 200px; width: 200px; margin-left: auto; margin-right: auto; display: block;" />
    </div>
  </body>