<?php
//conexão
include("conexao.php");
//sesão
session_start();



//dados
$nome = $_SESSION['nome'];


//verificação
if (isset($_SESSION['logado']) != true){
 header('Location: ');
}
 
mysqli_close($conexao);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="_fotos/image.png">
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>LineTime</title>
    <style type="text/css">
        .col-md-6{
            background-color: white;
        }
         .col-md-3{
            background-color: white;
        }
        iframe{
            height: 480px;
            width: 270px;
        }

    </style>
</head>
<body>
<div class="container">	
              <a href="logout.php">sair</a>
                        <div  class="image" >
                            <img src="_fotos/perfil.png" width="70" height="70">
                            </div>
                            <div class="fotoperfil" >
                                     <a href="perfil.html"> <img src="" width="70" height="70"></a>
                            </div>
                                <div class="pesquisa">
                                    <button class="but but-green"><a class="lista" href="mensagens.php">Conversas</a></button>
                                    <button class="but but-green"><a class="lista" href="notificacao.html">Notificações</a></button>
                                   <button class="but but-green"> <a class="lista" href="amigos.html">Amigos</a></button>
                                   <button class="but but-green"> <a  class="lista" href="empresas.php">Empresas</a></button>
                                   <button class="but but-green"> <a  class="lista" href="videos.html">videos</a></button>
                                    <form method="GET">
                                    </form>
                                </div>

                    
                        <h1 class="line">LineTime</h1>



                        <hr/>
                        
     <div class="row">                  
        <div class="col-md-3"> 
                     
                
                   
                   
                         <h3>UltimosVideos</h3>

                                    <input class="form-control mr-sm-1" type="text" placeholder="Search" aria-label="Search" >
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> </button>
         
                                     <iframe src="empresa.php"></iframe> 
                                   
                                   
                                        
                
                     
                   
        </div>
        <div class="col-md-6">
               
               

                    
                       <?php
    //define variables and set to empty values 
    
    $nameErr  = $commentErr  = "";

    $name = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      
        if (empty($_POST["comment"])){
            $comment = "";
        }else {
            $comment = 
            test_input($_POST["comment"]);
      //
        }
       
    }
    
        
    
    function test_input ($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<h3>Publicaçãoes</h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  
  <textarea name="comment" rows="" cols="70"></textarea>
  
  <input type="submit" name="submit" value="Publicar">  
</form>

<?php

echo $comment;
echo "<br>";

?>
               
                    
                  
               
        </div>
        <div class="col-md-3">        
                                
                                    <h2>Empresas</h2>
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    <iframe src="empresa.php"></iframe>                


                                
                   
        </div>
                
     </div>
     <footer>
     <?php
echo "<p>Copyright &copy; 2018-" . date("Y") . " linetimes.com.br</p>";
?></footer> 
</div>
</body>
</html>