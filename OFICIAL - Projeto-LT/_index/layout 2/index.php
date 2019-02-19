<!DOCTYPE html>
<html>
<head>
	<title>LineTime</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/formatacao.css">
</head>
<body>
	<?php
	//Incluindo a página nav.php, que contém apenas o meu superior do site
	include("nav.php");
	?>
	<div class="container text-center">    
	  <div class="row margin-top-conteudo">
	    <div class="col-sm-3 well">
	      <div class="well">
	        <p><a href="#" class="texto-verde">Meu Perfil</a></p>
	        <img src="login.jpg" class="img-circle" height="65" width="65" alt="Avatar">
	      </div>
	      <h5><div class="alert alert-success" role="alert"> Pessoas Online  <img src="icone_18.png" class="" width="25" height="25" alt=""></div></h5>
	      <p><a href="#">Jhonata Custodio</a></p>
	      <p><a href="#">Caio Henrique</a></p>
	      <p><a href="#">Wian Clodoaldo</a></p>
	      <div class="well fotos-videos">
	      	<p><a href="#">Fotos e Videos</a></p>
	          <div class="embed-responsive embed-responsive-16by9">
			  	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
			  </div>
			  <img src="login.jpg" class="img-thumbnail" height="70" width="70">
			  <img src="login.jpg" class="img-thumbnail" height="70" width="70">
			  <img src="login.jpg" class="img-thumbnail" height="70" width="70">
			  <img src="login.jpg" class="img-thumbnail" height="70" width="70">
	      </div>
	    </div>
	    <div class="col-sm-7">
	    
	      <div class="row">
	        <div class="col-sm-12">
	          <div class="panel panel-default text-left">
	            <div class="panel-body">
	              <p contenteditable="true">Status: no que está pensando...</p>
	              <button type="button" class="btn btn-default btn-sm">
	                <span class="glyphicon glyphicon-thumbs-up"></span> Like
	              </button>     
	            </div>
	          </div>
	        </div>
	      </div>
	      
	      <div class="row">
	        <div class="col-sm-3">
	          <div class="well">
	           <p>Jhonata Custodio</p>
	           <img src="login.jpg" class="img-circle" height="55" width="55" alt="Avatar">
	          </div>
	        </div>
	        <div class="col-sm-9">
	          <div class="well">
	            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-3">
	          <div class="well">
	           <p>Caio Henrique</p>
	           <img src="login.jpg" class="img-circle" height="55" width="55" alt="Avatar">
	          </div>
	        </div>
	        <div class="col-sm-9">
	          <div class="well">
	            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-3">
	          <div class="well">
	           <p>Wian Cloadoaldo</p>
	           <img src="login.jpg" class="img-circle" height="55" width="55" alt="Avatar">
	          </div>
	        </div>
	        <div class="col-sm-9">
	          <div class="well">
	            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-3">
	          <div class="well">
	           <p>Cleuba Mello</p>
	           <img src="login.jpg" class="img-circle" height="55" width="55" alt="Avatar">
	          </div>
	        </div>
	        <div class="col-sm-9">
	          <div class="well">
	            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
	          </div>
	        </div>
	      </div>
	          
	    </div>
	    <div class="col-sm-2 well">
	      <div class="thumbnail">
	        <p>Eventos:</p>
	        <img src="img.jpg" alt="Paris" width="400" height="300">
	        <p><strong>Inauguração LineTime</strong></p>
	        <p>Ter. 25 Dezembro 2019</p>
	        <button class="btn btn-primary">Info</button>
	      </div>      
	      <div class="well">
	        <p>Anuncios</p>
	      </div>
	      <div class="well">
	        <p>Anuncios</p>
	      </div>
	    </div>
	  </div>
	</div>

	<footer class="container-fluid text-center">
	  <p>Todos os direitos reservados</p>
	</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>