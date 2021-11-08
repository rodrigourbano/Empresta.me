<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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
            <li>
              <a class="dropdown-item" href="./cadastroUsers.php"
                ><i class="fas fa-user-astronaut"></i> Pessoas</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="./cadastroEmprestimo.php"
                ><i class="fas fa-people-carry"></i> Empréstimos</a
              >
            </li>
          </ul>
        </li>

        <li class="nav-item text-white">
          <a class="nav-link" href="#">Relatórios</a>
        </li>
      </ul>
    </nav>
  </body>
</html>
