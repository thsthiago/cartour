<?php
  session_start();
  include_once("conexao.php");

  $tipo_veiculo = isset($_POST['tipo_veiculo']) != "" ? $_POST['tipo_veiculo'] : 'naoDefinida';
  $marca = $_POST['marca'] != "" ? $_POST['marca'] : 'naoDefinida';
  $modelo = $_POST['modelo'] != "" ? $_POST['modelo'] : 'naoDefinida';
  $anoFabricacao = $_POST['anofabricacao'] != "" ? $_POST['anofabricacao'] : 'naoDefinida';
  $anoModelo = $_POST['anomodelo'] != "" ? $_POST['anomodelo'] : 'naoDefinida';
  $cambio = $_POST['cambio'] != "" ? $_POST['cambio'] : 'naoDefinida';
  
  function validPortas () {
    if($_POST['portas'] == 10){
      return "00";
    } else if((string)$_POST['portas'] != "") {
      return (string)$_POST['portas'];
    }else {
      return 'naoDefinida';
    };
  }

  $portas = validPortas();
  $combustivel = $_POST['combustivel'] != "" ? $_POST['combustivel'] : 'naoDefinida';  
  $km = (string)$_POST['km'] != "" ? (string)$_POST['km'] : 'naoDefinida';
  $chassi = $_POST['chassi'] != "" ? $_POST['chassi'] : 'naoDefinida';
  $preco = (string)$_POST['preco'] != "" ? $_POST['preco'] : 'naoDefinida';

  function validaForm ($campo, $nomeCampo) {
    if ($campo == 'naoDefinida') {
      $_SESSION["vazio_$nomeCampo"] = "<p class=".$nomeCampo.">Campo obrigatório</p>";
      echo '<meta http-equiv="refresh" content="0; url=http://localhost/veiculos%20completo/validacao_veiculos.php"/>';
      return 'naoDefinida';
    } else{
      if ($nomeCampo == 'km' && $campo == 0) {
        $_SESSION["value_$nomeCampo"] = "00";
      } else {
        $_SESSION["value_$nomeCampo"] = $campo;
      }
    };

    return 'enviar';
  };

  $marcas = [];
  array_unshift($marcas,"pular", validaForm($tipo_veiculo,'tipo_veiculo'), validaForm($marca,'marca'), validaForm($modelo,'modelo'), validaForm($anoFabricacao,'anofabricacao'),
  validaForm($anoModelo,'anomodelo'), validaForm($cambio,'cambio'), validaForm($portas,'portas'), validaForm($combustivel,'combustivel'), validaForm($km,'km'), validaForm($chassi,'chassi'),
  validaForm($preco,'preco')); 

  $enviar = array_search('naoDefinida', $marcas);

  if($enviar != "") {
    die();
  };

  $envio_veiculo = "INSERT INTO VEICULOS (id_veiculo, tipoVeiculo, marca, modelo, anoFabricacao, anoModelo, cambio, portas, combustivel, km, chassi, preco) VALUES ('0','$tipo_veiculo','$marca', '$modelo','$anoFabricacao', '$anoModelo', '$cambio', '$portas', '$combustivel', '$km', '$chassi', '$preco')";
  $resultado_veiculo = mysqli_query($conn, $envio_veiculo);

  if(mysqli_insert_id($conn)) {
    header("Location: listar.php");
  }
?>