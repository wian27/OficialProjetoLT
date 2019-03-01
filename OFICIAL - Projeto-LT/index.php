<?php

session_start();


if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>LineTime</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/formatacao.css">
</head>
<body>
<?php
//Incluindo a pÃ¡gina nav.php, que contÃ©m apenas o meu superior do site
include("nav.php");

?>

<nav class="navbar navbar-fixed-top menu fundo-menu">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#minhaNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand texto-verde" href="#">Line<b class="t-time">T</b>ime</a>
        </div>
        <div class="collapse navbar-collapse" id="minhaNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="texto-verde">Pagina Inicial</a></li>
                <li><a href="#" class="texto-verde">Menssagens</a></li>
                <li><a href="logoff.php" class="texto-verde">Sair</a></li>
            </ul>

            <form class="navbar-form navbar-right" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar..">
                    <span class="input-group-btn">
	            <button class="btn btn-default" type="button">
	              <span class="glyphicon glyphicon-search"></span>
	            </button>
	          </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="texto-verde"><span class="glyphicon glyphicon-user"></span> Minha Conta</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center">
    <div class="row margin-top-conteudo">
        <div class="col-sm-3 well">
            <div class="well">
                <h1>Bem vindo a Index da pagina <?php echo $_SESSION['nome'];?>!</h1>
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
                            <form action="registrar_poste.php" method="POST">
	            		<textarea name="postar" style="width: 100%; height: 50px" >


	              		 </textarea>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-send"></span> Postar
                                </button>

                            </form>
                        </div>
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
                <div class="col-sm-8">
                    <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-default btn-sm botao-like">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="well">
                        <p>Wian Cloadoaldo</p>
                        <img src="login.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-default btn-sm botao-like">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="well">
                        <p>Cleuba Mello</p>
                        <img src="login.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-default btn-sm botao-like">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </button>
                </div>
            </div>

        </div>
        <div class="col-sm-2 well">
            <div class="thumbnail">
                <p>Eventos:</p>
                <img src="img.jpg" alt="Paris" width="400" height="300">
                <p><strong>InauguraÃ§Ã£o LineTime</strong></p>
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