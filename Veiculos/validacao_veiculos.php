<?php
  session_start();
?>
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
    <h1 class="cadastro" >Cadastro de Veículos</h1>
    <a href="listar.php">Veículos Cadastrados<i class="fas fa-long-arrow-alt-right"></i></a>
  </div>

  <section id="main">

    <div class="form">
      <form action="envio_form.php" method="POST">
        
        <div class="select">
          <label for="tipo_veiculo">Tipo de veículo</label>
          <select name="tipo_veiculo">
            <?php

              function validaTipo() {
                if(!empty($_SESSION['value_tipo_veiculo'])){

                  if($_SESSION['value_tipo_veiculo'] == 'Carro') {
                    echo '<option value="Carro" selected="true">Carro</option>';
                    echo '<option value="Moto">Moto</option>';
                    unset($_SESSION['value_tipo_veiculo']);
                    return;
                  } 
                  
                  if($_SESSION['value_tipo_veiculo'] == 'Moto') {
                    echo '<option value="Carro">Carro</option>';
                    echo '<option value="Moto" selected="true">Moto</option>';
                    unset($_SESSION['value_tipo_veiculo']);
                    return;
                  }    
                };
  
                  echo '<option selected="true" disabled value="" >Selecione uma opção</option>';
                  echo '<option value="Carro">Carro</option>';
                  echo '<option value="Moto">Moto</option>';
                  unset($_SESSION['value_tipo_veiculo']);
              };

              validaTipo();
            ?>
          </select>
          <?php
            if(!empty($_SESSION['vazio_tipo_veiculo'])){
              echo $_SESSION['vazio_tipo_veiculo'];
              unset($_SESSION['vazio_tipo_veiculo']);
            }
          ?>
        </div><!--select-->

        <div class="w100">
          <label class="move" for="marca">Marca</label>
          <input type="text" name="marca"
            <?php
              if(!empty($_SESSION['value_marca'])){
								echo "value='".$_SESSION['value_marca']."'";
								unset($_SESSION['value_marca']);
							}
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_marca'])){
              echo $_SESSION['vazio_marca'];
              unset($_SESSION['vazio_marca']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="modelo">Modelo</label>
          <input type="text" name="modelo"
            <?php
              if(!empty($_SESSION['value_modelo'])){
								echo "value='".$_SESSION['value_modelo']."'";
								unset($_SESSION['value_modelo']);
							}
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_modelo'])){
              echo $_SESSION['vazio_modelo'];
              unset($_SESSION['vazio_modelo']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="anofabricacao">Ano de Fabricação</label>
          <input type="number" name="anofabricacao" min="1900" max="2020" 
            <?php
              if(!empty($_SESSION['value_anofabricacao'])){
								echo "value='".$_SESSION['value_anofabricacao']."'";
								unset($_SESSION['value_anofabricacao']);
							}
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_anofabricacao'])){
              echo $_SESSION['vazio_anofabricacao'];
              unset($_SESSION['vazio_anofabricacao']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="anomodelo">Ano de Modelo</label>
          <input type="number" name="anomodelo" min="1900" max="2020" 
            <?php
              if(!empty($_SESSION['value_anomodelo'])){
                echo "value='".$_SESSION['value_anomodelo']."'";
                unset($_SESSION['value_anomodelo']);
              };
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_anomodelo'])){
              echo $_SESSION['vazio_anomodelo'];
              unset($_SESSION['vazio_anomodelo']);
            };
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="cambio">Câmbio</label>
          <input type="text" name="cambio" 
            <?php
              if(!empty($_SESSION['value_cambio'])){
                echo "value='".$_SESSION['value_cambio']."'";
                unset($_SESSION['value_cambio']);
              }
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_cambio'])){
              echo $_SESSION['vazio_cambio'];
              unset($_SESSION['vazio_cambio']);
            }
          ?>
        </div><!--w100-->

        <div class="w100 portas_block">
          <label for="portas">Portas</label>
          <input type="number" name="portas" min="2" max="4" 
            <?php
              if(!empty($_SESSION['value_portas'])){
                echo "value='".$_SESSION['value_portas']."'";
                unset($_SESSION['value_portas']);
              }
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_portas'])){
              echo $_SESSION['vazio_portas'];
              unset($_SESSION['vazio_portas']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="combustivel">Combustível</label>
          <input type="text" name="combustivel" 
            <?php
              if(!empty($_SESSION['value_combustivel'])){
                echo "value='".$_SESSION['value_combustivel']."'";
                unset($_SESSION['value_combustivel']);
              }
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_combustivel'])){
              echo $_SESSION['vazio_combustivel'];
              unset($_SESSION['vazio_combustivel']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="km">Kilometragem</label>
          <input type="number" name="km" 
            <?php
              if(!empty($_SESSION['value_km'])){
                echo "value='".$_SESSION['value_km']."'";
                unset($_SESSION['value_km']);
              }
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_km'])){
              echo $_SESSION['vazio_km'];
              unset($_SESSION['vazio_km']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="chassi">Chassi</label>
          <input type="text" name="chassi" 
            <?php
              if(!empty($_SESSION['value_chassi'])){
                echo "value='".$_SESSION['value_chassi']."'";
                unset($_SESSION['value_chassi']);
              }
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_chassi'])){
              echo $_SESSION['vazio_chassi'];
              unset($_SESSION['vazio_chassi']);
            }
          ?>
        </div><!--w100-->

        <div class="w100">
          <label for="preco">Preço</label>
          <input type="text" name="preco" 
          <?php
              if(!empty($_SESSION['value_preco'])){
                echo "value='".$_SESSION['value_preco']."'";
                unset($_SESSION['value_preco']);
              }
            ?>
          >
          <?php
            if(!empty($_SESSION['vazio_preco'])){
              echo $_SESSION['vazio_preco'];
              unset($_SESSION['vazio_preco']);
            }
          ?>
        </div><!--w100-->

        <button class="botao" type="submit">Cadastrar Veículo</button>
      </form>
    </div>
  </section>
  
  <script src="js/main.js"></script>
</body>
</html>