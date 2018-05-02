<?php include ("conecta.php"); ?>
<?php include ("navbar.php"); ?>
<?php include ("banco-produtor.php"); ?>
<?php 

		

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$vencimento = $_POST['vencimento'];
  	
  	if (inserir_mercados($conexao, $nome, $endereco, $vencimento )) { 
		 header ('location:painelGeral.php');
 
	} 
	