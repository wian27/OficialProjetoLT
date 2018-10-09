
	<?php
	include ("conexao.php");
	
	if (isset($_GET['posts'])){
		$pn = (int)$_GET['posts'];

	}else{
		$pg = 1;

	}
	$maximo = 2;
	$inicio = ($pg * $maximo) - $maximo;

	$seleciona = mysqli_query("SELECT *FROM posts ORDER BY id DESC LIMIT $inicio, $maximo");
	$conta = myslqi_num_rows($seleciona);

	if($conta <= 0 ){
		echo "<code> Nunhuma postagem cadastrada no banco de dados!";

	}else{
		while($row = mysqli_fetch_array($seleciona)){
			$id = $row['id'];
			$titulo = $row['titulo'];
			$imagem =$row['imagem'];
			$data =$row['data'];
			$hora =$row['hora'];
			$postador =$row['postador'];
			$sql = "SELECT * FROM usuarios WHERE usuario = '$postador'";
			$query = mysqli_query($sql);
			$linha = mysqli_fetch_assoc($query);
		}
	}


	?>
