<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,300;1,700&display=swap"
      rel="stylesheet"
    />
    
    <?php
      include('libs/start.php');
      include('includes/scripts.php');
    ?>
    
    <title>Cadastrar</title>
  </head>
  <body>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100 text-white">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
              <div class="card-body bg-dark p-4 p-md-5" style="border-radius: 1rem">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Cadastro</h3>
                <form action="register-send.php" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" placeholder="Michael" name="firstName" />
                        <label class="form-label" for="firstName">Primeiro Nome</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" placeholder="Scott" name="lastName"/>
                        <label class="form-label" for="lastName">Sobrenome</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" placeholder="worldsbestboss@dundermifflin.com"/>
                        <label class="form-label" for="emailAddress">Email</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-4 d-flex align-items-center">
                      <div class="form-outline datepicker w-100">
                        <input type="password" class="form-control form-control-lg" id="password" name="password"/>
                        <label for="birthdayDate" class="form-label">Senha</label>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 pt-2">
                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Registrar!</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
