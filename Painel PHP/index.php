<!DOCTYPE html>
<html lang="en">
<head>	
	<!--Materialize -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
  <script type="text/javascript" src="js/zuera.js"></script>
	

	<link rel="stylesheet" type="text/css" href="css/index.css">
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="js/materialize.min.js"></script>
  	<!--
			
			-->
	<meta charset="UTF-8">
	<title>Painel de Controle</title>
</head>
<body>

<nav>
    <div class="nav-wrapper" >
      <a href="#" class="brand-logo center">TorresOFF</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
      </ul>
    </div>
  </nav>




<div class="margem-central"><!---------------->



	
 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Login</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Password</label>
        </div>
      </div>
    </form>
  </div>
<center> <button onclick="click()"> <a id="connect"class="waves-effect waves-light btn" >Connect </a></button> </center>
	

  </div><!------------>
    
</body>
</html>