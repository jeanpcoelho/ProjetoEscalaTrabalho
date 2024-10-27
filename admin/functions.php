<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "escala_admin";
//conexao com banco de dados
$connect = mysqli_connect($host, $db_user, $db_pass, $db_name );
if (!$connect) {
    die("Falha na conexão: " . mysqli_connect_error());
}


function login($connect){
    if(isset($_POST['acessar'])AND !empty($_POST['nome'])AND !empty($_POST['senha'])) {
        $nome = filter_input(INPUT_POST, "nome");
        $senha = sha1($_POST['senha']);
        $query = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha ='$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);

        if (!empty($return['nome'])){
            echo $return['nome'];
            session_start();
            $_SESSION['nome'] = $return['nome'];
            $_SESSION['id'] = $return['id'];
            $_SESSION['ativa'] = TRUE;
            header("location:index.php");


        }else{
            echo "nome ou senha invalido";
        }
        
    }
}