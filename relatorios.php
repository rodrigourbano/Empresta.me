<?php
include('includes/verificaLogado.php');
include('libs/start.php');
include('includes/navbar.php');
include('includes/scripts.php');

$dataAtual = date("Y-m-d");
$lista = $database->select("emprestimos", "*", ["status" => 1]);
?>

<div style="background-color: #EAEAEA; height: 1920px; margin-top: 0px;">
<span>⠀</span>
<h1 style="text-align: center; margin-bottom: 50px;">Todos empréstimos realizados</h1>
    <div class="container">
        <div class="row">
            <div class="col text-center">
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
                    <th scope="col">Data de Devolução</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista as $l) { ?>
                <tr>
                    <th scope="row"><?=$l["objeto"]?></th>
                    <td><?=$l["nomeRecebe"]?></td>
                    <td><?=$l["dataLimite"]?></td>
                    <td><?=$l["dataDevolucao"]?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>                    
    function gerarCSV(table_id, separator = ',') {
    var rows = document.querySelectorAll('table#' + table_id + ' tr');
    var csv = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
            data = data.replace(/"/g, '""');
            row.push('"' + data + '"');
        }
        csv.push(row.join(separator));
    }
    var csv_string = csv.join('\n');
    var filename = 'emprestimo_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';
    var link = document.createElement('a');
    link.style.display = 'none';
    link.setAttribute('target', '_blank');
    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
    link.setAttribute('download', filename);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>