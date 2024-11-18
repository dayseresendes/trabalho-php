<?php 

    $login = $_POST["admin"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM admin WHERE login='$login' and senha='$senha'";
    $conexao = new PDO('mysql:host=localhost; dbname=curriculo', 'root', '');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id_admin']; 

    if($logado == null){
        //usuário ou senhas invalidas
        header('Location: usuarioerro.php');
    }else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        header('Location: index.php');

        die();
    }
    ?>