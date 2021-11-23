<?php
include('includes/verificaLogado.php');
include('libs/start.php');
include('includes/navbar.php');
$dataAtual = date("Y-m-d");
$lista = $database->select("emprestimos", "*", ["status" => 0]);
?>
<div style="background-color: #EAEAEA; height: 1920px; margin-top: 0px;">
<span>⠀</span>
<h1 style="text-align: center; margin-bottom: 50px;">Lista de Empréstimos Pendentes</h1>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <button class="btn btn-dark btn-lg text-center" style="margin-bottom: 30px;" onclick="location.href='cadastroEmprestimo.php'">Cadastrar Emprestimos</button>
                <button class="btn btn-dark btn-lg text-center" style="margin-bottom: 30px; margin-left: 10px" onclick="gerarCSV('emprestimos');">Gerar CSV</button>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-dark table-responsive" id="emprestimos">
            <thead>
                <tr>
                    <th scope="col">Item emprestado</th>
                    <th scope="col">Quem pegou</th>
                    <th scope="col">Data Limite</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista as $l) { ?>
                <tr>
                    <th scope="row"><?=$l["objeto"]?></th>
                    <td><?=$l["nomeRecebe"]?></td>
                    <td><?=$l["dataLimite"]?></td>
                    <td><a href="./finalizarEmprestimo.php?id=<?php echo $l['id']; ?>" title="Finalizar emprestimo" style="color: #FFFFFF; text-decoration: none !important;"><i class="far fa-check-circle">⠀</i></a>
                        <a href="./deletarEmprestimo.php?id=<?php echo $l['id']; ?>" title="Deletar emprestimo" style="color: #FFFFFF; text-decoration: none !important;"><i class="far fa-times-circle">⠀</i></a>
                        <a href="./editarEmprestimo.php?id=<?php echo $l['id']; ?>" title="Editar emprestimo" style="color: #FFFFFF; text-decoration: none !important;"><i class="far fa-edit"></i></a>
                        <?php 
                        
                        if ($dataAtual > $l["dataLimite"]) {
                            ?>
                            <span id="piscar" style="color: red;">⠀<i class="fas fa-exclamation-triangle"></i></span> <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="./js/gerarCSV.js"></script>
<script src="./js/blinkText182.js"></script>
<?php 

if (isset($_SESSION['fnStatus'])) {
    ?>
    <script>
        Swal.fire({
        title: 'Emprestimo finalizdo!',
        text: 'Emprestimo finalizado com sucesso, para conferi-lo vá em Relatórios',
        icon: 'success',
        confirmButtonText: 'Beleza!'
        })
    </script> <?php
    unset($_SESSION['fnStatus']);
}

if (isset($_SESSION['delStatus'])) {
    ?>
    <script>
        Swal.fire({
        title: 'Emprestimo deletado!',
        text: 'Emprestimo deletado com sucesso',
        icon: 'success',
        confirmButtonText: 'Beleza!'
        })
    </script> <?php
    unset($_SESSION['delStatus']);
}

if (isset($_SESSION['editStatus'])) {
    ?>
    <script>
        Swal.fire({
        title: 'Emprestimo editado!',
        text: 'Emprestimo editado com sucesso',
        icon: 'success',
        confirmButtonText: 'Beleza!'
        })
    </script> <?php
    unset($_SESSION['editStatus']);
}
?>
