   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Novo usuario</title>
    <link rel="icon" type="image/jpg" href="_fotos/perfil.png">
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">

    <style>
        body{
            background-color: green;
            text-align: center;

        }
        .container{
            padding-top: 5%;
            text-decoration:snow;
            box-sizing: border-box;
            background-color:forestgreen;
            color:white;
            text-align:center;


        }
    </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<div  class="image" >
    <img src="_fotos/perfil.png" width="90" height="85">
</div>


<body id="corpo">
<h1 id="inicio">LineTime</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Já tem uma conta?</h2>
           <a href="index.php"> <h3>Então entre agora!</h3></a>
        </div>

        <div class="col-md-6">
                    <form  name="singup" method="POST" action="processa.php">

                         Nome  <input  class="form-control" type="text" name="nome" placeholder="Primeiro nome"/><br/>
                         Sobrenome <input  class="form-control" type="text" name="sobrenome" placeholder="Ultimo nome"/><br/>
                         Cidade <input class="form-control" type="text" name="cidade" /><br/>
                         E-mail<input class="form-control" type="email" name="email"/><br/>
                         Senha<input type="password" name="senha"><br/>
                         <input type="file" name="foto"><br/>
                         Sexo<select name="sexo">
                         <option value="M">Masculino</option>
                         <option value="F">Feminino</option>
                         </select><br/>
                        <input type="submit" value="Cadastrar"/>
                    </form>
        </div>            
        <div class="col-md-3"></div>            
    </div> 
</div>

</body>
</html>
