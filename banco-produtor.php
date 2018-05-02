</<?php 
include ("conecta.php");

function inserir_mercados($conexao , $nome , $vencimento , $endereco){
	$query = "insert  into mercado (nome, vencimento, endereco) values ('{$nome}' , '{$vencimento}' ,  '{$endereco}' ";
 	mysqli_query ($conexao, $query);


 	return true ;
} 


function listaProdutos($conexao){

  $produtos = array();
  $lerlista = mysqli_query($conexao, "select * from mercado") ;
   while($mercado = mysqli_fetch_assoc($lerlista)){
    array_push($produtos, $mercado);
   }
    return $produtos;
}
function removeMercado($conexao, $id){
	$query = "delete from mercado where id ={$id}";
	return mysqli_query($conexao,$query);
}

