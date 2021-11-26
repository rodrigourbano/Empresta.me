<?php
include('includes/verificaLogado.php');
include('includes/navbar.php');
include('includes/scripts.php');

$userID = $_SESSION['uid'];
$dadosUser = $database->select("users","*", ["id" => $userID]);

?>
<div class="cadastro-div-md text-white">
  <span>⠀</span>
  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">Dados Usuário</h3>
    <div class="row" style="margin-left: 10px; margin-right: 10px">
    <form action="configUsuario-send.php" method="post">  
      <div class="col-md-12 mb-4">
          <div class="form-outline">
              <label class="form-label" for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control form-control-lg" value="<?=$dadosUser[0]['email']?>" disabled/>
              <label class="form-label" for="senha">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control form-control-lg" placeholder="Confirme sua senha" required/>
            <div class="text-center" style="margin-top: 45px">
                <button type="submit" name="submit" class="btn green-outline-btn center">Atualizar dados</button>
            </div>  
          </div>
        </div>
    </form>
    </div>