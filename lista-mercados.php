
<?php include ("conecta.php"); ?>
<?php include ("navbar.php"); ?>
<?php include ("banco-produtor.php") ?>



<table class="bordered">
  


<?php
$produtos = listaProdutos($conexao);
foreach($produtos as $mercado){
?>

  <?php
} 
?>

 

</table>
<table>
        <thead>
          <tr>
              <th>Nome</th>
              <th>Endereço</th>
              <th>Vencimento</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php
          foreach($produtos as $mercado){
            ?>
            <tr>
              <td><?= $mercado['nome']?> </td>
              <td><?= $mercado['endereco'] ?></td>
              <td><?= $mercado['vencimento'] ?></td>
              <td><a href="remove-mercado.php ?id=<?= $mercado['id'] ?>" onclick="Materialize.toast('Mercado Removido', 4000)"> <i class="material-icons">clear</i> </a> </td>
              </tr>
              <?php
            } 
            ?>
          </tr>
