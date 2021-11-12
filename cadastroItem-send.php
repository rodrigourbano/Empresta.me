<?php

include('libs/start.php');

if(isset($_POST["submit"])) {
    
    $objeto = $_POST["objeto"];

 $database->insert("item", ["item" => $objeto]);
}
?>

<body>
  <?php 
    include('includes/navbar.php');
    ?>
    <div class="cadastro-div text-white">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">Item cadastrado com sucesso!</h3>
      <h4 class="mb-3 pb-1 pb-md-0 mb-md-4 texto-cadastro"><?=$objeto?></h4>
    </div>
  </body>

