
<?php
//conexão
require_once"conexao.php";

//sesão
session_start();

//botao entrar
if (isset($_POST['entrar'])):
  $erros = array();
  $email = mysqli_escape_string($conexao, $_POST['usuario']);
   $senha = mysqli_escape_string($conexao, $_POST['senha']);

   if (empty($email) or empty($senha)):
    $erros [] = "<li>O campo precisa ser preenchido</li>";
else:
    $sql= "SELECT email from usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0):
     


        $sql = "SELECT * FROM usuarios WHERE email ='$email' AND senha ='$senha'";
        $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                

                $_SESSION ['logado']=true;
                $_SESSION['id_usuario'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                header('Location: logado.php');

            else:
        $erros[] = "<li> Usuario e senha não conferem </li>";
            endif;
      else:
  $erros[] = "<li>usuario inexistente </li>";
    endif;

endif;

endif;
?>

<html>
	<head>
		<title> Projeto </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" href="styleindex.css">
	</head>
	<body>	
		<div class="container">
							<div class="div_conteudo em_linha"><div align="center"><font color="#3CB371">linetimes.com.br</font></div></div>
								
								<nav class="navbar navbar-light" style="background-color: #2E8B57;">
									<a class="navbar-brand" href="#">
									  <div class="img"> <img src="logot.png" width="100" height="95" alt=""> </div>
									<div class="head_2">  </div>
									</a>
								</nav>
								<ul>
							    <div class="linha"><hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;">   </div>    
							</ul>	 
								 <div class="row">
									<div class="form-group col-md-12"> 
									<div class="">
										<h1><font color="#7CCD7C"><b>Login da sua conta</b></font></h1>
									
									</div>
									<div class="menu_login">	
											<div class="col-sm">
														
										
											  <?php
							                                                                                if (!empty($erros)):
							                                                                                    foreach ($erros as $erro) :
							                                                                                        echo $erro;
							                                                                                endforeach;
							                                                                                       
							                                                                                   endif;
							                                                                                ?>
											
													 <form  class="form" method="POST" action="logado.php"   enctype="multipart/form-data">
															
															
																<div class="form-group" >
																				<label for="usuario"><h5><font color="#B22222">Informe seu Email </font></h5></label>
																				<input type="email" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
																				<small id="emailHelp" class="form-text text-muted"><b>Nós não vamos compartilhar seu e-mail com mais ninguém</b></small>
																  </div>
																  <div class="form-group">
																				<label for="password"><h5>Senha</h5></label>
																				<input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua Senha">
																  </div>
																  <div class="form-check">
																				<input type="checkbox" class="form-check-input" id="exampleCheck1">
																				<label class="form-check-label" for="exampleCheck1"><h5>Mostrar Senha</h5></label>
																  </div>
																 				 <button type="submit" class="btn btn-success" value="Entrar">Entrar</button>
														
														
													</form>	
											
								</div>
							<div class="form-group col-md-12">
															<div class="button">
																	<button type="button" class="btn btn-#CD3333 btn-lg btn-block"><strong>Cadastre-se Já</strong></button>
															</div>
							</div>
						</div>		


								<div class="img_F"> 
									<img src="img_f.jpg" width="1900" height="380"/>
								 </div>
								<div class="img_S"> 
									<img src="img_S.jpg" width="417" height="350" > 
								</div>
								

								
								 <footer class="footer">
										<div class="card bg-dark text-white">
										 			 <img class="card-img" src="cabecalho.jpg">
										     <div class="card-img-overlay">
													<h3 class="card-title">Card title</h3>
													<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
													<p class="card-text">Last updated 3 mins ago</p>
										     </div>
										</div>
								</footer>

</div>
</div>	
</div>		
</body>	

</html>