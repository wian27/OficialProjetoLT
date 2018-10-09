
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

<!DOCTYPE html>

<html lang="pt-br">
    <head>
    <link rel="icon" type="image/jpg" href="_fotos/IMAGE%20(2).png">
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style type="text/css">

        <title>LoginLineTime</title>

        <style>
            .login{
                padding-top: 10%;
                text-align: center;
                margin: 2px 2px 2px 2px blue;
            }
            a{
                text-decoration: none;
                box-sizing: border-box;
                width: 30px;
                height: 10px;
                background-color: white;

            }
        </style>
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Ainda não tem uma conta? <br/>Cadastre-se agora mesmo!</h2>
         <h3> <a href="login.php"> Novo usuario</a></h3>
                        
        </div>
            <div class="col-md-6">
                       
                                                                                <?php
                                                                                if (!empty($erros)):
                                                                                    foreach ($erros as $erro) :
                                                                                        echo $erro;
                                                                                endforeach;
                                                                                       
                                                                                   endif;
                                                                                ?>

                   
                <form method="POST" action=""   enctype="multipart/form-data">
                    <h2> Aréa de login</h2>
                    <input class="form-control" name="usuario" id="usuario" type="text"placeholder="Usuario" height="50" width="100"></br></br>
                    <input class="form-control" value="login" name="senha"  type="password"></br></br>
                    
                    <button  type="hidden" name="entrar" value="login">Entrar</button></br>
                  
                </form>
           
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html> 