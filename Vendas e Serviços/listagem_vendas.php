<html> 
	<head>
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem das Vendas</title>
  <link href="vendas.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e796b83976.js" crossorigin="anonymous"></script>
	</head>
	<body>


	<?php
	header("content-type: text/html; charset=latin1");
	
	
	$con = mysqli_connect('localhost', 'root', '');

	
	mysqli_select_db($con , 'cartour') or 
		die("Erro na abertura do banco: " . mysqli_error($con) );

		$comandoSQL='select * FROM vendas_servicos';

	$registros = mysqli_query($con, $comandoSQL) or
		die ("Erro na sele?o de clientes: ". mysqli_error($con) );	

	
	$linhas = mysqli_num_rows($registros);

	if($linhas == 0)
	{
		die("nenhuma venda ou serviços foi encontrado. Encerrando programa!");
	}
		echo "<br>";
		echo "Existem $linhas vendas e serviços cadastrados<br>" ;
		echo "<br>";

		$contador = 0;

		echo "<table border ='1'>";
		echo "	<tr>";
		echo "		<th>Nome</th>";
		echo "		<th>Data da Venda</th>";
		echo "		<th>Tipo da Venda</th>";
		echo "		<th>Valor da Venda</th>";
		echo "		<th>Venda está Paga</th>";
		echo "		<th>Tipo de Serviço</th>";
		echo "		<th>Data do Serviço</th>";
		echo "		<th>Serviço está Concluido</th>";
		echo "		<th>Fidelidade</th>";
		echo "		<th>Observação</th>";
		echo "	</tr>";


	while( $contador < $linhas)
	{
		$dados = mysqli_fetch_array($registros);
		echo "	<tr>";
		echo "		<td>" . $dados ["nomeCliente"]." </td>";
		echo "		<td>" . $dados ["dataVendas"]."</td> ";
		echo "		<td>" . $dados ["tipoVendas"]."</td> ";
		echo "		<td>" . $dados ["valorVendas"]." </td>";
		echo "		<td>" . $dados ["vendaPaga"]."</td>";
		echo "		<td>" . $dados ["tipoServicos"]."</td>";
		echo "		<td>" . $dados ["dataServicos"]."</td>";
		echo "		<td>" . $dados ["serviConcluido"]."</td>";
		echo "		<td>" . $dados ["fidelidade"]."</td>";
		echo "		<td>" . $dados ["obs"]."</td>";
		echo "	</tr>";
		
		$contador++;
	}
	echo "</table>";
	?>
	
	<br>
	<a href='vendas.html'>Formulario clique aqui</a>
	</body>
</html>