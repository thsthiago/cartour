<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Veículos</title>
  <link href="styles/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e796b83976.js" crossorigin="anonymous"></script>
</head>
<body>
  
  <header>
    <h1>CAR<span>TOUR</span></h1>
  </header>

  <div class="title-cadastro">
    <h1 class="cadastro" >Alterar cadastro</h1>
    <a href="listar.php">Veículos Cadastrados<i class="fas fa-long-arrow-alt-right"></i></a>
  </div>

  <section id="main">

    <div class="form">
      
    </div>
  </section>

  <?php
    include_once("conexao.php");
    $alterar = (int) $_GET['alterar'];


    $veiculos = "SELECT * FROM VEICULOS";
    $banco_veiculos = mysqli_query($conn, $veiculos);

    $arr = 0;
    while($row_usuarios = mysqli_fetch_assoc($banco_veiculos)) {
      $banco[(int)$row_usuarios['id_veiculo']] = [$row_usuarios['id_veiculo'], $row_usuarios['tipoVeiculo'],$row_usuarios['marca'],$row_usuarios['modelo'],$row_usuarios['anoFabricacao'],$row_usuarios['anoModelo'],$row_usuarios['cambio'],$row_usuarios['portas'],$row_usuarios['combustivel'],$row_usuarios['km'],$row_usuarios['chassi'],$row_usuarios['preco']];
      $arr++;
    }
    $json_banco = json_encode($banco);
    $json_id = json_encode($alterar);   
    
  ?>
  <script>
    let bancoDeDados =  <?= $json_banco?>;
    let id = <?= $json_id?>;
    console.log();

    let form = document.querySelector('.form');

    function veiculo (veiculo) {
      if(bancoDeDados[id][1] == "Carro"){
        return `<option value="Carro" selected="true">Carro</option>
        <option value="Moto">Moto</option>`;
      }

      if(bancoDeDados[id][1] == "Moto"){
        return `<option value="Carro">Carro</option>
        <option value="Moto" selected="true">Moto</option>`;
      }
    }

    form.innerHTML = `
      <form action="atualizar_cadastro.php" method="POST">
        <div class="select">
            <label for="tipo_veiculo">Tipo de veículo</label>
            <select name="tipo_veiculo" >
              ${veiculo()}
            </select>
        </div><!--select-->
      
        <div class="w100">
          <label class="move" for="marca">Marca</label>
          <input type="text" name="marca" value="${bancoDeDados[id][2]}">
        </div><!--w100-->

        <div class="w100">
          <label for="modelo">Modelo</label>
          <input type="text" name="modelo" value="${bancoDeDados[id][3]}">
        </div><!--w100-->

        <div class="w100">
          <label for="anofabricacao">Ano de Fabricação</label>
          <input type="number" name="anofabricacao" min="1900" max="2020" value="${bancoDeDados[id][4]}">
        </div><!--w100-->

        <div class="w100">
          <label for="anomodelo">Ano de Modelo</label>
          <input type="number" name="anomodelo" min="1900" max="2020" value="${bancoDeDados[id][5]}">
        </div><!--w100-->

        <div class="w100">
          <label for="cambio">Câmbio</label>
          <input type="text" name="cambio" value="${bancoDeDados[id][6]}">
        </div><!--w100-->

        <div class="w100 portas_block">
          <label for="portas">Portas</label>
          <input type="number" name="portas" min="2" max="4" value="${bancoDeDados[id][7]}">
        </div><!--w100-->

        <div class="w100">
          <label for="combustivel">Combustível</label>
          <input type="text" name="combustivel" value="${bancoDeDados[id][8]}">
        </div><!--w100-->

        <div class="w100">
          <label for="km">Kilometragem</label>
          <input type="number" name="km" value="${bancoDeDados[id][9]}">
        </div><!--w100-->

        <div class="w100">
          <label for="chassi">Chassi</label>
          <input type="text" name="chassi" value="${bancoDeDados[id][10]}">
        </div><!--w100-->

        <div class="w100">
          <label for="preco">Preço</label>
          <input type="text" name="preco" value="${bancoDeDados[id][11]}">
        </div><!--w100-->

        <button class="botao" type="submit" name="alterar" value="${id}">Enviar</button>
      
      </form>
    `;

  </script>
  <script src="js/main.js"></script>
</body>
</html>