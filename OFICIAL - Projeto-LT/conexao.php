<?php
//include_once"processa.php";
// variasves de cobexao

$hostnome = "localhost";
$servename = "root";
$password = "";
$bd = "login";

$conexao = new mysqli($hostnome,$servename,$password,$bd)or die(error) ;

$id = 0;
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$senha = md5($senha);


$sql = "INSERT INTO usuario (nome,email,senha) VALUES(?,?,?)";


$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sss", $nome,$email,$senha);

$sql2 = "SELECT * FROM usuario WHERE email = '$email'";
$insert = mysqli_query($conexao,$sql2) or die("erro");
if ($nome = $_POST['nome']|| $email = $_POST['email'] || $senha = $_POST['senha'] == ""){
    echo  "<script> alert('Alguns campos estão em branco, por favor volte e tente novamente!') </script>";
    header("Location:cadastro.html");
  
}
if (mysqli_num_rows($insert) < 1) {

    $sqlprep->execute();
}else{
    echo "ja existe";

}




?>