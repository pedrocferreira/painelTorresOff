<?php include("navbar.php"); ?>
<center><span class="nav-title">Adicionar Produto </span></center>


	

 <div class="row">
    <form class="col s12" action="confirmacao.php" method="post" >
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Digite o nome do Estabelecimento" name="nome" type="text" class="validate">
         
        </div>
        <div class="input-field col s12">
          <input name="endereco" type="text" class="validate">
          <label for="last_name">Endereço</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  name="vencimento" type="text" class="validate">
          <label for="disabled">Vencimento</label>
        </div>
      </div>
		<button type="submit" value="Cadastrar" class="waves-effect waves-light btn" onclick="Materialize.toast('Registro Feito', 4000)">ENVIAR</button>   
		
	
    </form>
  </div>

