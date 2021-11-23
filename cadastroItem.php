<body>
  <?php 
    include('includes/verificaLogado.php');
    include('includes/navbar.php');
    ?>
    <div class="cadastro-div text-white">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">Cadastrar Item</h3>
        <div class="row" style="margin-left: 10px; margin-right: 10px">
        <form action="cadastroItem-send.php" method="post">  
          <div class="col-md-12 mb-4">
              <div class="form-outline">
                  <label class="form-label" for="objeto">Item</label>
                  <input type="text" id="objeto" name="objeto" class="form-control form-control-lg" placeholder="Nome do item"/>
                <div class="text-center" style="margin-top: 45px">
                    <button type="submit" name="submit" class="btn green-outline-btn center">Cadastrar Item</button>
                </div>  
              </div>
            </div>
        </form>
        </div>
  </body>
</html>
