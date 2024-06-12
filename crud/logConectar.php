<?php 
    $usuario = $_POST["txtName"];
    $senha = $_POST["txtSenha"];
    $codificada = hash('sha512', $senha);
    $query = "select * from paciente where login = '{$usuario}' and senha = '{$senha}'";
    include "../servico/service.class.php";
    $con = new Service();
    $stmt = $con->consultar($query);
    $rowcount = $stmt->fetchColumn();
    if($rowcount > 0){
        session_start();
        $_SESSION["nome"] = "logado";
        header('Location: ../view/index.php');
    }else{
        header('<script> alert("Usuario não encontrado")</script>'); 
    }
?>