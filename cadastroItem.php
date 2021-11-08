<body>
  <?php 
    include('includes/navbar.php');
    ?>
    <div class="cadastro-div text-white">
      <span>⠀</span>
      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">Cadastrar Item</h3>
      <form>
        <div class="row" style="margin-left: 10px; margin-right: 10px">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
              <label class="form-label" for="objeto">Item</label>
              <input
                type="text"
                id="objeto"
                class="form-control form-control-lg"
                placeholder="Nome do item"
              />
              <div class="text-center" style="margin-top: 45px">
                 <button type="button" class="btn green-outline-btn center">Cadastrar Item</button>
            </div>  
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
