





<html>
	<head>
		<title> Projeto </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" href="formatacao.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta charset="utf-8">
			<link rel="stylesheet" href="estilo.css" media="(min-width: 480px) and (max-width: 900px)"/>
			<link rel="stylesheet" href="estilo.css" media="screen and (max-width: 480px)" />
	</head>

<div class="body">	
<body>	
	<div class="div_conteudo em_linha"><div align="center"><font color="#3CB371">linetime.com.br</font></div></div>
	<nav class="navbar navbar-light" style="background-color: #2E8B57;">
		<a class="navbar-brand" href="#">
		  <div class="img"> <img src="logot.png" width="100" height="95" alt=""> </div>
		<div class="head_2">  </div>
		</a>
	</nav>
	
	<ul>
		<div class="linha"><hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;">       
	</ul>	 
		</div>
		
	<div class="row">
		<div class="page-header">
			<h1><font color="#7CCD7C"><b>Login da sua conta</b></font></h1>
		</div>
		
		<div class="menu_login">
			<div class="col-sm">
				
				<div class="form">
					<form action="index.html">
						<div class="form-group">
							<label for="exampleInputEmail1"><h5><font color="#B22222">Informe seu Email</h5></label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
									<small id="emailHelp" class="form-text text-muted"><b>Nós não vamos compartilhar seu e-mail com mais ninguém</b></small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1"><h5>Senha</h5></label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua Senha">
						</div>	 
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1"><h5>Mostrar Senha</h5></label>
						</div>	 
						<button type="submit" class="btn btn-success">Entrar</button>
					
					</form>
				</div>				
			</div>				 
		</div>					 
	</div>						 
							 
	<div class="form-group col-md-12">
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#conteudo1" aria-expanded="true" aria-controls="collapseOne">
									 <strong> <center><font color="#1C1C1C">Cadastre-se Já</font></center> </strong>
						</a>
					</h4>
				</div>
				<div id="conteudo1" class="card-header" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						<table class="table table-sm table-success">
							<p><div class="form-group col-md-9"><div class="alert alert-success" role="alert"><h5> Formulário de Cadastro  </h5></div></div></p>



				<form method="POST" action="conexao.php" id="cadastro" name="cadastro"  enctype="multipart/form-data">
								  <div class="form-row">
								  	 <div class="form-group col-md-3">
									<label for="inputAddress"><strong>Firts name</strong></label>
									<input type="text" class="form-control" id="nome" name="nome" placeholder="País de Origem">
								  </div>  
								   <div class="form-group col-md-3">
									<label for="inputAddress"><strong>Last name </strong></label>
									<input type="text" class="form-control" id="ultimonome" name="ultimonome" placeholder="País de Origem">
								  </div>  
									<div class="form-group col-md-3">
									  <label for="inputEmail4"><strong>Email</strong></label>
									  <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email">
									</div>
									<div class="form-group col-md-3">
									  <label for="inputPassword4"><strong>Password</strong></label>
									  <input type="password" class="form-control" id="senha" name="senha" placeholder="Escolha sua senha">
									</div>
								  </div>
								  Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
								  <div class="form-row">
									<div class="form-group col-md-4">
									  <label for="inputCity"><strong>City</strong></label>
									  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Sua Cidade">
									</div>
									
								  </div>
								  <div class="form-group">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" id="gridCheck">
									  <label class="form-check-label" for="gridCheck">
										<strong>Eu não sou um Robô</strong>
									  </label>
									</div>
								  </div>
								  <button type="submit" class="btn btn-success">Cadastrar</button>
				</form>
						</table>	
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="img_S"> <img src="img_S.jpg" width="417" height="350"> </div>
		 		
	<div class="footer">
		<footer>
			<div class="card bg-dark text-white">
			<img class="card-img" src="cabecalho.jpg" alt="Card image">		
				<div class="card-img-overlay">
					<h3 class="card-title"><font color="#006400">Line</font><font color="#B22222">Time</font></h3>
					<p class="card-text">Crie sua conta,faça amigos,converse com todo mundo,ouça suas musicas,conheça um mundo cheio de opções.</p>
					<p class="card-text">Ultima atualização 30/06/2018</p>
				</div>
			</div>		
		</footer>
	</div>
</body>
</div>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous">
	</script>

	<script 
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
			crossorigin="anonymous">
	</script>

</html>	
							 