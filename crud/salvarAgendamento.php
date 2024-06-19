<?php 
  $idagendamento = $_POST['txtAgendamento'];
  $idpaciente = $_POST['txtPaciente'];
  $dataAgendamento = $_POST['data'];

  include "../servico/service.class.php";
  $con = new Service();
  $con->salvar("INSERT INTO AGENDAMENTO(idagendamento,idpaciente,dataAgendamento) VALUES('" . $idagendamento . "', '" . $idpaciente . "','". $dataAgendamento . "')");
?>