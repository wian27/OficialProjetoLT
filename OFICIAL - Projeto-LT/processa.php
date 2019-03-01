
<?php
include_once"valida_login.php";


$servename = "localhost";
$usuario = "root";
$senha = "";
$bd = "projetoline";


$conexao = new mysqli($servename, $usuario,$senha,$bd) or die(error);



    $sql = "INSERT INTO usuarios(nome,ultimonome,,email,senha) VALUES (?,?,?,?)";

    $sqlprep = $conexao->prepare($sql);

$sqlprep->bind_param("ssss", $nome,$ultimonome,$email,$senha);
if ($sqlprep == true) {
    # code...
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
$sqlprep->execute();
?>
