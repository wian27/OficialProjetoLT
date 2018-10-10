
<?php

include("conexao.php");
$id = 0 ;
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$email= $_POST['email'];
$senha = $_POST['senha'];

$seleciona = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email'");
$conta = mysqli_num_rows($seleciona);

if ($conta <= 0) {
	$sql = "INSERT INTO usuarios(nome,sobrenome,cidade,sexo,email,senha) VALUES ('$nome','$sobrenome','$cidade','$sexo','$email','$senha')";
$insert = mysqli_query($conexao,$sql) or die("erro");
}else{
	echo "ja existe";
}




/*

$sql=$mysqli ->prepare("insert into usuarios values (?,?,?,?,?,?,?)");


$sql-> bind_param("issss",$nome,$sobrenome,$pais, $estado, $cidade,$email, $senha);

$sql-> execute();

$sql -> store_result();

$result=$sql->affected_rows;


if ($result >0)
{
    echo "<script>
    alert('Dados inseridos com sucesso!');
    exit();
    </script>";
}
else{
    echo "<script>
    alert('Erro!');
    exit();
    </script>";
}
*/
?>
