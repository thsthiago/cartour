<html> 
	<head>
		<title>Listagem de clientes</title>
	</head>
	<body>


	<?php
	header("content-type: text/html; charset=latin1");
	
	
	$con = mysqli_connect('localhost', 'root', '');

	
	mysqli_select_db($con , 'cartour') or 
		die("Erro na abertura do banco: " . mysqli_error($con) );

		$comandoSQL='select * FROM cliente';

	$registros = mysqli_query($con, $comandoSQL) or
		die ("Erro na seleção de clientes: ". mysqli_error($con) );	

	
	$linhas = mysqli_num_rows($registros);

	if($linhas == 0)
	{
		die("nenhum cliente foi encontrado. Encerrando programa!");
	}
		echo "Existem $linhas clientes cadastrados<br>" ;

		$contador = 0;

		echo "<table border ='1'>";
		echo "	<tr>";
		echo "		<th>Nome</th>";
		echo "		<th>Data de nascimento</th>";
		echo "		<th>CPF</th>";
		echo "		<th>E-mail</th>";
		echo "		<th>DDD</th>";
		echo "		<th>Telefone</th>";
		echo "		<th>Celular</th>";
		echo "		<th>Estado</th>";
		echo "		<th>Cidade</th>";
		echo "		<th>Bairro</th>";
		echo "		<th>CEP</th>";
		echo "		<th>Endereço</th>";
		echo "		<th>Numero da Casa</th>";
		echo "		<th>Numero do Apartamento</th>";
		echo "	</tr>";


	while( $contador < $linhas)
	{
		$dados = mysqli_fetch_array($registros);
		echo "	<tr>";
		echo "		<td>" . $dados ["nomeCliente"]." </td>";
		echo "		<td>" . $dados ["dataNascimento"]."</td> ";
		echo "		<td>" . $dados ["Cpf"]."</td> ";
		echo "		<td>" . $dados ["Email"]." </td>";
		echo "		<td>" . $dados ["ddd"]."</td>";
		echo "		<td>" . $dados ["Telefone"]."</td>";
		echo "		<td>" . $dados ["Celular"]."</td>";
		echo "		<td>" . $dados ["Estado"]."</td>";
		echo "		<td>" . $dados ["Cidade"]."</td>";
		echo "		<td>" . $dados ["Bairro"]."</td>";
		echo "		<td>" . $dados ["Cep"]."</td>";
		echo "		<td>" . $dados ["endereco"]."</td>";
		echo "		<td>" . $dados ["numeroCasa"]."</td>";
		echo "		<td>" . $dados ["numeroAP"]."</td>";
		echo "	</tr>";
		
		$contador++;
	}
	?>

	</body>
</html>