<?php include ("conecta.php"); ?>
<?php include ("navbar.php"); ?>
<?php include ("banco-produtor.php"); ?>
<?php 

		

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$vencimento = $_POST['vencimento'];
	$avatar = $_POST['avatar'];
	$url1 = $_POST['url1'];
	$url2 = $_POST['url2'];
	$url3 = $_POST['url3'];
	$url4 = $_POST['url4'];
	$url5 = $_POST['url5'];
	$url6 = $_POST['url6'];
	$url7 = $_POST['url7'];
	$url8 = $_POST['url8'];

  	
  	if (inserir_mercados($conexao, $nome, $endereco, $vencimento, $avatar, $url1 , $url2 , $url3 , $url4 , $url5 , $url6, $url7 , $url8 )) { 
		 header ('location:painelGeral.php');
 
	} 
	