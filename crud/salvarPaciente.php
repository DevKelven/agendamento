<?php 
    $nome = $_POST['txtName'];
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    include "../servico/service.class.php";
    $con = new Service();
    $con->salvar("INSERT INTO PACIENTE(NOME,LOGIN,SENHA) VALUES('" . $nome . "', '" . $login . "','". $senha . "')");


?>