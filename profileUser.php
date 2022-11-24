<div class="w-auto p-3 mt-5" style="background-color: rgba(21, 44, 33, 0.8);">
            <h1 style="color:#fff ;">Editar Usuários</h1>
        </div>
    </div>
</div>
<?php
$sql = "SELECT *  FROM usuarios";

$res = $mysqli->query($sql);

$qtd = $res->num_rows;
if ($qtd > 0) {
    print "<table class ='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Data Nasc.</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->dt_nasc . "</td>";
        print " <td>
                        <button onclick=\"location.href='?page=edita&id=" . $row->id . "';\" class='btn btn-success mb-1'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir o registro?')){location.href='?page=salvar&acao=exclui&id=" . $row->id . "';}else{false;}\" class='btn btn-danger mb-1'>Excluir</button>
                    </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Resultados não encontrados!</p>";
}
?>
</div>
