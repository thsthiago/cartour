<?php
  include_once("conexao.php");

  $deletar = (int) $_GET['deletar'];

  $deletar_veiculo = ("DELETE FROM VEICULOS WHERE id_veiculo = $deletar");
  $apagando = mysqli_query($conn, $deletar_veiculo);

  if(true) {
    header("Location: listar.php");
  } 
?>