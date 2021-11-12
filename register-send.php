<?php 

include('libs/start.php');
include('includes/headOnly.php');

if(isset($_POST["submit"])) {
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $database->insert("users", [
        "primeiroNome" => $firstName,
        "sobrenome" => $lastName,
        "email" => $email,
        "senha" => $password,
    ]);

        ?>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="card bg-dark text-white" style="border-radius: 1rem">
                    <div class="card-body p-5 text-center">
                        <div class="card-body p-5 text-center" role="alert">
                            <h2 class="fw-bold mb-2 text-uppercase">Seja bem vindo(a) <?=$firstName?>!</h4>
                            <p class="text-white-50 mb-5">Siga para a pagina de <a href="login.php">login</a> para entrar no sistema</p>
                        </div>
                        <img src="./img/undraw/welcome.svg" class="img-welcome" />
                    </div>
                </div>
            </div>
        </section>
        <?php
    
} else {
    header("location: ./register.php");
}


?>