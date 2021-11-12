<body>
  <?php 
    include('includes/navbar.php');
    ?>
    <div class="cadastro-div-lg text-white" style="height: 658px !important">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">
        Cadastrar Empréstimo
      </h3>
      <form action="cadastroEmprestimo-Enviar.php" method="post">
        <div class="row" style="margin-left: 10px; margin-right: 10px">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
              <label class="form-label" for="objeto">Emprestar para:</label>
              <input
                type="text"
                id="recebedor"
                name="recebedor"
                class="form-control form-control-lg"
                placeholder="Jim Halpert"
              />
              <label class="form-label" for="objeto">Item</label>
              <!--Inserir foreach para fazer um input de select-->
            <!--  <select class='form-select form-select-lg mb-3'> -->

              <?php 
              $item = $database->select("item", "*");
              if(count($item) == 0) { ?>
                  <select class='form-select form-select-lg mb-3' name="objeto" disabled>
                  <option selected>Cadastre os objetos no menu de Cadastro de itens</option>
              <?php
              } else { ?>
                <select class='form-select form-select-lg mb-3' name="objeto">
             <?php foreach ($item as $i) { ?>
                <option value="<?=$i['item']?>"><?=$i['item']?></option> 
             <?php }
              }             
            ?>
            </select>
              <!--<input
                type="text"
                id="objeto"
                name="objeto"
                class="form-control form-control-lg"
                placeholder="Caneta"
              />-->
              <label class="form-label" for="dataMax">Data Máxima</label>
              <input
                type="date"
                id="dataMax"
                name="dataMax"
                class="form-control form-control-lg"
              />
              <h4 class="texto-cadastro">Contato</h4>
              <label class="form-label" for="email">Email</label>
              <input
                type="text"
                id="email"
                name="email"
                class="form-control form-control-lg"
                placeholder="dwightschrute@dundermifflin.com"
              />
              <label class="form-label" for="telefone">Telefone</label>
              <input
                type="text"
                id="telefone"
                name="telefone"
                class="form-control form-control-lg"
                placeholder="(xx) 9xxxx-xxxx"
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

