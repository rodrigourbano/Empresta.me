<body>
  <?php 
  include('includes/navbar.php');
  ?>
  <div class="cadastro-div-md text-white">
    <span>⠀</span>
    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 texto-cadastro">
      Cadastrar Pessoas Frequentes
    </h3>
    <form>
      <div class="row" style="margin-left: 10px; margin-right: 10px">
        <div class="col-md-12 mb-4">
          <div class="form-outline">
            <label class="form-label" for="objeto">Nome</label>
            <input
              type="text"
              id="objeto"
              class="form-control form-control-lg"
              placeholder="Dwight Schrute"
            />
            <label class="form-label" for="objeto">Email</label>
            <input
              type="text"
              id="objeto"
              class="form-control form-control-lg"
              placeholder="dwightschrute@dundermifflin.com"
            />
            <label class="form-label" for="telefone">Telefone</label>
            <input
              type="text"
              id="telefone"
              class="form-control form-control-lg"
              placeholder="(41) 99999-1234"
            />
            <div class="text-center" style="margin-top: 10px">
                 <button type="button" class="btn green-outline-btn center">Cadastrar Pessoas</button>
            </div>  
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

