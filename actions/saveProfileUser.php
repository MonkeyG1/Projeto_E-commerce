<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $dt_nasc = $_POST["dt_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, dt_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$dt_nasc}')";
            
            $res = $mysqli->query($sql);
            if($res==true){
                print "<script>alert('Usuário criado com sucesso!')</script>";
                print "<script>location.href='?page=index.php'</script>";
            } else {
                print "<script>alert('Usuário não pode ser criado!')</script>";
                print "<script>location.href='?page=cadastrar'</script>";
            }
            break;
        case 'edita':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $dt_nasc = $_POST["dt_nasc"];

            $sql = "UPDATE usuarios SET 
                        nome='{$nome}', 
                        email='{$email}',
                        senha='{$senha}', 
                        dt_nasc='{$dt_nasc}'
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $mysqli->query($sql);
            if($res==true){
                print "<script>alert('Usuário editado com sucesso!')</script>";
                print "<script>location.href='?page=index.php'</script>";
            } else {
                print "<script>alert('Usuário não pode ser editado!')</script>";
                print "<script>location.href='?page=cadastrar'</script>";
            }
            break;
        case 'exclui':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $mysqli->query($sql);
            if($res==true){
                print "<script>alert('Usuário excluído com sucesso!')</script>";
                print "<script>location.href='?page=cadastrar.php'</script>";
            } else {
                print "<script>alert('Usuário não pode ser excluído!')</script>";
                print "<script>location.href='?page=cadastrar'</script>";
            }
            break;    
    }
?>