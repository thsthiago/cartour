<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="styles/main.css" rel="stylesheet">
  <link href="styles/listar.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e796b83976.js" crossorigin="anonymous"></script>
</head>
<body>

  <header>
      <h1>CAR<span>TOUR</span></h1>
  </header>

  <main>
    
    <div class="title">
      <a href="veiculos.html"><i class="fas fa-long-arrow-alt-left"></i>Cadastrar Veículo</a>
      <h1>Veículos cadastrados</h1>
      <?php 
        include_once("conexao.php");
        $veiculos = "SELECT * FROM VEICULOS";
        $banco_veiculos = mysqli_query($conn, $veiculos);

        $arr = 0;
        $banco = [];
        while($row_usuarios = mysqli_fetch_assoc($banco_veiculos)) {
          $banco[$arr] = [$row_usuarios['id_veiculo'], $row_usuarios['tipoVeiculo'],$row_usuarios['marca'],$row_usuarios['modelo'],$row_usuarios['anoFabricacao'],$row_usuarios['anoModelo'],$row_usuarios['cambio'],$row_usuarios['portas'],$row_usuarios['combustivel'],$row_usuarios['km'],$row_usuarios['chassi'],$row_usuarios['preco']];
          $arr++;
        }
        echo "<p>Veículos cadastrados: ".count($banco)."</p>";
      ?>
    </div>

    <div class="filtro">
      <p>Filtrar <i class="fas fa-filter"></i></p>
      <div class="filtrar ">
        
        <label>
          <input type="radio" value="todos" name="filter" checked>
          Todos os Veículos
          <span></span>
        </label>
      
        <label>
          <input type="radio" value="carro" name="filter">
          Carro
          <span></span>
        </label>  

        <label>
          <input type="radio" value="moto" name="filter">
          Moto
          <span></span>
        </label>

      </div>
    </div>
    
    <section class="cadastrados"> 

        <?php
          include_once("conexao.php");

          $veiculos = "SELECT * FROM VEICULOS";
          $banco_veiculos = mysqli_query($conn, $veiculos);

          $arr = 0;
          $banco = [];
          while($row_usuarios = mysqli_fetch_assoc($banco_veiculos)) {
            $banco[$arr] = [$row_usuarios['id_veiculo'], $row_usuarios['tipoVeiculo'],$row_usuarios['marca'],$row_usuarios['modelo'],$row_usuarios['anoFabricacao'],$row_usuarios['anoModelo'],$row_usuarios['cambio'],$row_usuarios['portas'],$row_usuarios['combustivel'],$row_usuarios['km'],$row_usuarios['chassi'],$row_usuarios['preco']];
            $arr++;
          }

          for($cont = 0; $cont < count($banco); $cont++) {
            if($banco[$cont][1] == 'Moto') {
              echo '
                <div class="box">
                  <p><strong>Número de Identificação: </strong>'.$banco[$cont][0].'</p>
                  <p><strong>Tipo do veículo: </strong>'.$banco[$cont][1].'</p>
                  <p><strong>Marca: </strong>'.$banco[$cont][2].'</p>
                  <p><strong>Modelo: </strong>'.$banco[$cont][3].'</p>
                  <p><strong>Ano da Fabricação: </strong>'.$banco[$cont][4].'</p>
                  <p><strong>Ano do Modelo: </strong>'.$banco[$cont][5].'</p>
                  <p><strong>Cambio: </strong>'.$banco[$cont][6].'</p>
                  <p><strong>Combustivel: </strong>'.$banco[$cont][8].'</p>
                  <p><strong>Km: </strong>'.$banco[$cont][9].'</p>
                  <p><strong>chassi: </strong>'.$banco[$cont][10].'</p>
                  <p><strong>Preço: </strong>'.$banco[$cont][11].'</p>
                  <div class="forms">
                    <form action="excluir.php" method="GET">
                      <button type="submit" name="deletar" value="'.$banco[$cont][0].'">DELETAR</button>
                    </form>
                    <form action="atualizar.php" method="GET">
                      <button type="submit" name="alterar" value="'.$banco[$cont][0].'">ALTERAR DADOS</button>
                    </form>
                  </div><!--forms-->
                </div><!--box-->';
            } else {
              echo '
                <div class="box">
                  <p><strong>Número de Identificação: </strong>'.$banco[$cont][0].'</p>
                  <p><strong>Tipo do veículo: </strong>'.$banco[$cont][1].'</p>
                  <p><strong>Marca: </strong>'.$banco[$cont][2].'</p>
                  <p><strong>Modelo: </strong>'.$banco[$cont][3].'</p>
                  <p><strong>Ano da Fabricação: </strong>'.$banco[$cont][4].'</p>
                  <p><strong>Ano do Modelo: </strong>'.$banco[$cont][5].'</p>
                  <p><strong>Cambio: </strong>'.$banco[$cont][6].'</p>
                  <p><strong>Portas: </strong>'.$banco[$cont][7].'</p>
                  <p><strong>Combustivel: </strong>'.$banco[$cont][8].'</p>
                  <p><strong>Km: </strong>'.$banco[$cont][9].'</p>
                  <p><strong>chassi: </strong>'.$banco[$cont][10].'</p>
                  <p><strong>Preço: </strong>'.$banco[$cont][11].'</p>
                  <div class="forms">
                    <form action="excluir.php" method="GET">
                      <button type="submit" name="deletar" value="'.$banco[$cont][0].'">DELETAR</button>
                    </form>
                    <form action="atualizar.php" method="GET">
                      <button type="submit" name="alterar" value="'.$banco[$cont][0].'">ALTERAR DADOS</button>
                    </form>
                  </div><!--forms-->
                </div><!--box-->';
            }
          }
          
        ?>

    </section>
  </main>

  <script src="js/nenhum_veiculo.js"></script>
  <script src="js/filtro.js"></script>
</body>
</html>