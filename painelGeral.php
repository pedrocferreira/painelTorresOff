<?php include("navbar.php"); ?>
<center><span class="nav-title">Adicionar Produto </span></center>


	

 <div class="row">
    <form class="col s12" action="confirmacao.php" method="post" >
      <div class="row">
        <div class="input-field col s12">
          <input  name="nome" type="text" class="validate">
          <label for="disabled"> Nome </label>
        </div>
        <div class="input-field col s12">
          <input name="endereco" type="text" class="validate">
          <label for="disabled">Endereço</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  name="vencimento" type="text" class="validate">
          <label for="disabled">Vencimento</label>
        </div>
              <div class="row">
        <div class="input-field col s12">
          <input  name="avatar" type="text" class="validate">
          <label for="disabled">Avatar</label>
        </div>

      </div>
            <div class="row">
        <div class="input-field col s3">
          <input  name="url1" type="text" class="validate">
          <label for="disabled">URL1</label>
        </div>

          <div class="input-field col s3">
          <input  name="url2" type="text" class="validate">
          <label for="disabled">URL2</label>
        </div>


           <div class="input-field col s3">
          <input  name="url3" type="text" class="validate">
          <label for="disabled">URL3</label>
          </div>


           <div class="input-field col s3">
          <input  name="url4" type="text" class="validate">
          <label for="disabled">URL4</label>
         </div>
       </div>
         
           <div class="row">         <div class="input-field col s3">
          <input  name="url5" type="text" class="validate">
          <label for="disabled">URL5</label>
          </div>


                 <div class="input-field col s3">
          <input  name="url6" type="text" class="validate">
          <label for="disabled">URL6</label>
          </div>

                     <div class="input-field col s3">
          <input  name="url7" type="text" class="validate">
          <label for="disabled">URL7</label>
          </div>

                     <div class="input-field col s3">
          <input  name="url8" type="text" class="validate">
          <label for="disabled">URL8</label>
          </div>
        </div>
        
        </div>
        </div>


      </div>
		<button type="submit" value="Cadastrar" class="waves-effect waves-light btn" onclick="Materialize.toast('Registro Feito', 6000)">ENVIAR</button>   
		
	
    </form>
  </div>

