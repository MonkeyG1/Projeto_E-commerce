<?php
include('conexao.php');

//Verifica se existe variavel email e variavel senha
if (isset($_POST['email']) || isset($_POST['senha'])) {
    //Verifica se os campos email e senha estao preenchidos
    //strlen verifica a quantidade de caracteres. 
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        //Limpa os campos email e senha para proteger do sql injection
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);


        //Busca no banco se o usuairo possui cadastro
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = md5({$senha})";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        //Retorna quantas linhas a consulta acima retornou
        $quantidade = $sql_query->num_rows;
        //Valida se o login e senha estao corretos
        if ($quantidade == 1) {
            //busca os dados do banco e joga dentro da  variavel $usuario
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            //Redireciona pra pagina principal
            header("Location: home.php");
        } else {
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }
}
?>