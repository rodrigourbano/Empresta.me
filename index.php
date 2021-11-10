<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/bootstrapJS/bootstrap.js"></script>
    <link rel="stylesheet" href="./css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,300;1,700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/d188baf7ab.js"
      crossorigin="anonymous"
    ></script>
    <?php
      include('libs/start.php');
    ?>
    <title>Empresta.Me</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand">
        <img
          src="./img/Empresta.me-greensvg.svg"
          width="150"
          height="80"
          style="margin-left: 20px; margin-top: 0px; margin-bottom: 0px"
        />
      </a>
      <button
        type="button"
        class="btn green-outline-btn float-end"
        style="margin-right: 20px"
        onclick="location.href='login.php'"
      >
        Login
      </button>
    </nav>
    <div class="green-div">
      <img src="./img/undraw/undraw_Empty_re_opql.svg" class="img-people" />
      <div class="main-text">
        <h2 class="title-green">Eu emprestei?</h2>
        <p class="text-green">
          Tenha controle sobre as coisas que empresta Cadastre itens e objetos,
          controle a quem você empresta e gere relatórios!
        </p>
        <button
          type="button"
          class="btn purple-btn"
          style="margin-right: 20px"
          onclick="location.href='register.php'"
        >
          Cadastrar
        </button>
      </div>
    </div>
    <div class="bg-dark">
      <h2 class="tech-text">Tecnologias Utilizadas</h2>
      <div class="row">
        <div class="coluna">
          <img src="./img/tech/3.svg" style="width: 75%" />
        </div>
        <div class="coluna">
          <img src="./img/tech/1.svg" style="width: 75%" />
        </div>
        <div class="coluna">
          <img src="./img/tech/2.svg" style="width: 75%" />
        </div>
      </div>
    </div>
    <footer>
      <div class="green-div">
        <h2 class="tech-text">Informações</h2>
        <img src="./img/autor.jpg" class="img-author" />
        <div class="main-text">
          <p class="text-about">
            Nome: Rodrigo Urbano Silva <br />PUC/PR <br />
            Fundamentos de Programação Web
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
