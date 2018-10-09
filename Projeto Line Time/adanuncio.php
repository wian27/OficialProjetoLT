<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<style>
img{
		hight:60px;
		width:60px;
		}
		</style
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administração-Site</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>



	 <div class="jumbotron" style="float: center">
						<h1 class="text-center">LineTime</h1>
					</div>
						  <header style="margin-top: -5%;">
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
       
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="logado.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mensaguens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Notificações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Lembre-me</a>
            </li>
            <li class="nav-item">
              <a href="sites.html" class="nav-link">Sites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Amigos</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
         
        </div>
      </nav>
    </header>	


<div class="container">
	<div class="row">
	    <div class="col-md-6">
		<h3 align="left">Adicionar Anuncio</h3>	
		<form method="POST" action="index.php">
			<div class="form-group">
				    <label for="exampleFormControlInput1">ID</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ID">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Titulo</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="titulo">
			  </div>

				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="exampleFormControlInput1">Data</label>
							    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Data">
			  				</div>

						</div>
						<div class="col-md-6">
								 <div class="form-group">
									    <label for="exampleFormControlSelect1">Categoria</label>
									    <select class="form-control" id="exampleFormControlSelect1">
									      <option>1</option>
									      <option>2</option>
									      <option>3</option>
									      <option>4</option>
									      <option>5</option>
									    </select>
			  					</div>
							
						</div>

					</div>
				</div>
				
			<div class="col-md-12">	
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Descrição Aqui:</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				   <div class="form-group">
				    <label for="exampleFormControlFile1">Carregar foto</label>
				    <input type="file" class="form-control-file" id="exampleFormControlFile1">
		  		</div>
				  <div class="col-md-4"><button class="btn btn-primary">Salvar</button></div>
					
				</form>
			</div>

				<div class="row">
					<div class="col-md-4">
						<img src="th.jpg" class="img-responsive" alt="">

					</div>	

					</div>
			 <div class="col-md-6">
			 <h2>Meus anuncios</div>
			 <iframe src=""></iframe>
		  </div>
    </div>
		
		



   <footer class="footer" style="background-color: black; color:white; height: 50px;">
      <div class="container">
        <span class="text-muted" style="padding-left: 42%;">Todos os direitos reservados</span>
        <span class="text-muted" style="padding-left: 80%;">  Wian Clodoaldo</span>
      </div>
    </footer>
</div>
</body>
</html>