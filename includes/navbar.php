<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empresta.me</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,300;1,700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
      include('libs/start.php');
      include('includes/scripts.php');
    ?>
    <script
      src="https://kit.fontawesome.com/d188baf7ab.js"
      crossorigin="anonymous"
    ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <!-- Navbar brand -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="./img/Empresta.me-greensvg.svg"
          width="150"
          height="80"
          style="margin-left: 20px; margin-top: 0px; margin-bottom: 0px"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text-white">
          <a class="nav-link" href="./dash.php">Dashboard</a>
        </li>
        <li class="nav-item text-white">
          <a class="nav-link" href="./relatorios.php">Relatórios</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Cadastros
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="./cadastroItem.php"
                ><i class="fas fa-boxes"></i> Items</a
              >
            </li>
            <!--<li>
              <a class="dropdown-item" href="./cadastroUsers.php"
                ><i class="fas fa-user-astronaut"></i> Pessoas</a
              >
            </li>-->
            <li>
              <a class="dropdown-item" href="./cadastroEmprestimo.php"
                ><i class="fas fa-people-carry"></i> Empréstimos</a
              >
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Configurações
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="./configUsuario.php"><i class="fas fa-user-cog"></i> Editar Perfil</a>
            </li>
            <li>
              <a class="dropdown-item" href="./doLogout.php?token=<?php echo md5(session_id()) ?>"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </body>
</html>
