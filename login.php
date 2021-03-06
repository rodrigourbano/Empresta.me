<?php 
include('libs/start.php');
include('includes/scripts.php');
session_start();
if (isset($_POST['email']) || isset($_POST['password'])) {

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $database->select("users", "*", ["email" => $email, "senha" => $password]);

    if(count($query) == 1) {

      $_SESSION['uid'] = $query[0]['id'];
      $_SESSION['nome'] = $query[0]['primeiroNome'];

      header("Location: dash.php"); 
    } else {
      echo "<div class='alert alert-danger' style='margin-bottom: 0px; font-size: 1.5em'>Falha ao logar! Email ou senha incorretos!</div>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
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

    <title>Login</title>
  </head>
  <body>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">
                    Realize o login para utilizar nossa plataforma!
                  </p>
                  <form action="" method="POST">
                    <div class="form-outline form-white mb-4">
                      <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control form-control-lg"
                        placeholder="Email"
                        required
                      />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control form-control-lg"
                        placeholder="Senha"
                        required
                      />
                      <label class="form-label" for="password"
                        >Senha</label
                      >
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                  </form>
                  <!--<p class="small mb-5 pb-lg-2" style="margin-top: 20px">
                    <a class="text-white-50" href="#!">Esqueceu a senha?</a>
                  </p>-->



                  <div
                    class="d-flex justify-content-center text-center mt-4 pt-1"
                  >
                    <a href="#!" class="text-white"
                      ><i class="fab fa-facebook-f fa-lg"></i
                    ></a>
                    <a href="#!" class="text-white"
                      ><i class="fab fa-twitter fa-lg mx-4 px-2"></i
                    ></a>
                    <a href="#!" class="text-white"
                      ><i class="fab fa-google fa-lg"></i
                    ></a>
                  </div>
                </div>

                <div>
                  <p class="mb-0">
                    Ainda n??o tem uma conta?
                    <a href="register.php" class="text-white-50 fw-bold">Cadastre-se</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
