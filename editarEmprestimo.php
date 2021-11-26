<?php
include('includes/verificaLogado.php');
include('libs/start.php');
include('includes/navbar.php');
include('includes/scripts.php');

$idEmprestimo = $_GET['id'];
$data = $database->select("emprestimos", "*", ["id" => $idEmprestimo]);

?>
<body>
    <div class="cadastro-div-lg text-white" style="height: 658px !important">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">
        Editar Empréstimo
      </h3>
      <form action="editarEmprestimo-enviar.php" method="post">
        <div class="row" style="margin-left: 10px; margin-right: 10px">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
              <label class="form-label" for="objeto">Emprestar para:</label>
              <input
                type="text"
                id="recebedor"
                name="recebedor"
                class="form-control form-control-lg"
                value="<?=$data[0]['nomeRecebe']?>"
              />
              <label class="form-label" for="objeto">Item</label>
                  <select class='form-select form-select-lg mb-3' name="objeto">
                    <option value="<?=$data[0]['objeto']?>"><?=$data[0]['objeto']?></option>
                  </select>
              <label class="form-label" for="dataMax">Data Máxima</label>
              <input
                type="date"
                id="dataMax"
                name="dataMax"
                class="form-control form-control-lg"
                value="<?=$data[0]['dataLimite']?>"
                required
              />
              <h4 class="texto-cadastro">Contato</h4>
              <label class="form-label" for="email">Email</label>
              <input
                type="text"
                id="email"
                name="email"
                class="form-control form-control-lg"
                value="<?=$data[0]['emailContato']?>"
              />
              <label class="form-label" for="telefone">Telefone</label>
              <input
                type="text"
                id="telefone"
                name="telefone"
                class="form-control form-control-lg"
                value="<?=$data[0]['telContato']?>"
              />
              <input
                type="text"
                id="idEmprestimo"
                name="idEmprestimo"
                class="form-control form-control-lg"
                value="<?=$idEmprestimo?>"
                hidden
              />
              <div class="text-center" style="margin-top: 10px">
                 <button type="submit" name="submit" class="btn green-outline-btn center">Emprestar!</button>
              </div>  
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>

