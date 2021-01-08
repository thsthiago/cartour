<?php

	$nome = $_GET["nome"];
	$data = $_GET["data"];
	$cpf = $_GET["cpf"];
	$email = $_GET["email"];
	$ddd = $_GET["ddd"];
	$telefone = $_GET["telefone"];
	$celular = $_GET["celular"];
	$estado = $_GET["estado"];
	$cidade = $_GET["cidade"];
	$bairro = $_GET["bairro"];
	$cep = $_GET["cep"];
	$endereco = $_GET["endereco"];
	$numerocasa = $_GET["numerocasa"];
	$numeroap = $_GET["numeroap"];

	if ($nome=="")
	{
		die("Nome do cliente não pode ficar vazio");
	}
	if ($data=="")
	{
		die("Data de nascimento não pode ficar vazio");
	}
	if ($cpf=="")
	{
		die("CPF do cliente não pode ficar vazio");
	}
	if ($email=="")
	{
		die("E-mail do cliente não pode ficar vazio");
	}
	if ($ddd=="")
	{
		die("DDD do cliente não pode ficar vazio");
	}
	if ($telefone=="")
	{
		die("Telefone do cliente não pode ficar vazio");
	}
	if ($celular=="")
	{
		die("Celular do cliente não pode ficar vazio");
	}
	if ($cidade=="")
	{
		die("Cidade do cliente não pode ficar vazio");
	}
	if ($bairro=="")
	{
		die("Bairro do cliente não pode ficar vazio");
	}
	if ($cep=="")
	{
		die("CEP do cliente não pode ficar vazio");
	}
	if ($endereco=="")
	{
		die("Endereço do cliente não pode ficar vazio");
	}
	

	echo "Nome do cliente: $nome<br>";
	echo "Data de nascimento do cliente: $data<br>";
	echo "CPF do cliente: $cpf<br>";
	echo "E-mail do cliente: $email<br>";
	echo "DDD do cliente: $ddd<br>";
	echo "Telefone do cliente: $telefone<br>";
	echo "Celular do cliente: $celular<br>";
	echo "Estado do cliente: $estado<br>";
	echo "Cidade do cliente: $cidade<br>";
	echo "Bairro do cliente: $bairro<br>";
	echo "CEP do cliente: $cep<br>";
	echo "Endereço do cliente: $endereco<br>";
	echo "Numero da casa do cliente: $numerocasa<br>";
	echo "Numero do apartamento do cliente: $numeroap<br>";

	$con = mysqli_connect("localhost", "root", "");

	mysqli_select_db($con, "cartour");

	$sql = "INSERT INTO cliente(nomeCliente, dataNascimento, cpf, email, ddd, telefone, 
	celular, estado, cidade, bairro, cep, endereco, numerocasa, numeroap)
	VALUES ('$nome', '$data', '$cpf', '$email', '$ddd', '$telefone', '$celular', 
	'$estado', '$cidade', '$bairro', '$cep', '$endereco', '$numerocasa', '$numeroap')";
	mysqli_query($con, $sql) or die("Erro na inserção da tabela:". mysqli_error($con) );

	echo "cliente <b>$nome</b> cadastrado com sucesso";

	if(true) {
    header("Location: listagem_clientes.php");
  }
	
?>