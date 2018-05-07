</<?php 
include ("conecta.php");

function inserir_mercados($conexao , $nome , $endereco, $vencimento, $avatar, $url1 , $url2 , $url3 , $url4 , $url5 , $url6 , $url7 , $url8 ){
	$query = "insert  into mercado (nome, endereco, vencimento, avatar, url1, url2, url3, url4, url5, url6, url7, url8 ) values ('{$nome}' , '{$endereco}' ,  '{$vencimento}' , '{$avatar} ' , '{$url1} ' , '{ $url2} ' , '{$url3} ' , '{$url4} ' , '{$url5} ' , '{$url6} ' , '{$url7} ' , '{$url8}' )";
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

