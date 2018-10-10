<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetoline";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// checando conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//processa novo cadastro
$id = 0 ;
$nome = $_POST['nome'];
$ultimonome = $_POST['ultimonome'];
$email = $_POST ['email']; 
$senha  =  $_POST['senha'];





$sql = "INSERT INTO usuarios (nome, ultimonome, email, senha)
VALUES ('$nome', '$ultimonome', '$email', ' $senha')";
 
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>