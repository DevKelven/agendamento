<?php 
    $nome = $_POST['txtName'];
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    include "../servico/service.class.php";
    $con = new Service();
    $codificada = hash('sha512',$senha);
    $con->salvar("INSERT INTO PACIENTE(NOME,LOGIN,SENHA) VALUES('" . $nome . "', '" . $login . "','". $codificada . "')");


?>