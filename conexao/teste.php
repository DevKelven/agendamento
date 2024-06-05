<?php  
    include "../servico/service.class.php";
    $con = new Service();
    $con->salvar("INSERT INTO PACIENTE(NOME,LOGIN,SENHA) VALUES('kelven','kel','1234')")

?>