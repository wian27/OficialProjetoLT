<?php
//conexão
require_once 'conexao.php';
//sesão

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Mensagens</title>
	<style type="text/css">
        .col-md-6{
            background-color: white;
        }
         .col-md-3{
            background-color: white;
        }
        .lateral{
            height: 480px;
            width: 270px;
        }
         .iframe{
            width: 100%;
            height:70px;
        }
        .line{
        	text-align: center;
        }

    </style>
</head>
<body>
	<div class="container">	
              <a href="logout.php">sair</a>
                        
                          
                                <div class="pesquisa">
                                	 <button class="but but-green"><a class="lista" href="logado.php">Inicio</a></button>
                                    <button class="but but-green"><a class="lista" href="mensagens.php">Conversas</a></button>
                                    <button class="but but-green"><a class="lista" href="notificacao.html">Notificações</a></button>
                                   <button class="but but-green"> <a class="lista" href="amigos.html">Amigos</a></button>
                                   <button class="but but-green"> <a  class="lista" href="empresas.php">Empresas</a></button>
                                   <button class="but but-green"> <a  class="lista" href="videos.html">videos</a></button>
                                </div>

                   
               
                        <h1 class="line">LineTime</h1>



                        <hr/>
          <div class="row"> 
          	<div class="col-md-12">
          		<iframe class="iframe" src=""></iframe>
          	</div>
          </div>               

                        
     <div class="row">                  
        <div class="col-md-3"> 
                     
                
                   
                   
                         <h3>Conversas</h3>

                                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         
                                     <iframe class="lateral" src=""></iframe> 
                                   
                                   
                                        
                
                     
                   
        </div>
        <div class="col-md-6">
        
        </div>
        <div class="col-md-3">        
                                
                                    <h2>Empresas</h2>
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    <iframe class="lateral" src="empresas.php"></iframe>                

        </div>
                
     </div>
     <footer><strong> LineTime 2018 </strong></footer> 
</div>
</body>
</html>
