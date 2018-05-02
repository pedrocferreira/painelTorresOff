<?php include ("conecta.php"); ?>
<?php include ("navbar.php"); ?>
<?php include ("banco-produtor.php") ?>
<?php
$id= $_GET['id'];
removeMercado($conexao, $id);
header ('location:lista-mercados.php');

?>
