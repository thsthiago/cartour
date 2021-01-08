<?php
  include_once("conexao.php");
  
  $veiculos = "SELECT * FROM VEICULOS";
  $banco_veiculos = mysqli_query($conn, $veiculos);

?>