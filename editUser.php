<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $res = $mysqli->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST"> 
    <input type="hidden" name="acao" value="edita">
    <input type="hidden" name="id" value="<?php print $row->id; ?>"
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control mb-3 " value="<?php print $row->nome; ?>"
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control mb-3" value="<?php print $row->email; ?>"
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control mb-3" placeholder="Digite a senha para prosseguir" required>
    </div>
    <div class="mb-3">
        <label>Data Nasc.</label>
        <input type="date" name="dt_nasc" class="form-control mb-3" value="<?php print $row->dt_nasc; ?>"
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>