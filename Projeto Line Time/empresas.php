<!DOCTYPE html>
<html>
<head>
	<title>LineTime</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<style type="text/css">
		.container{
			text-align: center;
			background-color:white;
		}
		h1{
			background-color: gray;
			color: white;
		}
		.col-md-3{
			background-color: gray;
			border-color:20px  black;

		}
		body{
			background-color: green;
		}
	</style>
</head>
<body>
<div class="container">

	<h1>Novo Site</h1>
	<div class="row">
		<div class="col-md-3"> 
			<h1>Aréa de Administração</h1>
		<form method="POST" action="adanuncio.php">
			<label  for="email">Email</label>
			<input class="form-control" class="form-control" type="text" name="email">
			<label for="email">Senha</label>
			<input class="form-control" type="password" name="senha">
			<button>Entrar</button>
		</form>
		</div>

			<div class="col-md-6">
			

				<form method="POST" action="adanuncio.php">
					<strong>Nome da Empresa</strong><input type="text" name="emprese" placeholder="Nome da Empresa" class="form-control"><br/>
					<strong>CNPJ</strong><input type="number" name="cnpj" placeholder="Numero do CNPJ" class="form-control"><br/>					<label for="estado"><strong>Tipo de Negocio</strong></label><br/>
								<select class="form-control" id="tiponegocio" name="tiponegocio">
								<option value="AL">Selecionar</option>
								
								<option value="AP">Restaurantes</option>
								<option value="AM">Serralheria</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select><br/>

					<strong>Enderço</strong><br/><input type="text" name="endereco" class="form-control"><br/>
					<label for="logo"><strong>Logo</strong></label><br/>
					<input type="file" name="logo" class="form-control"><br/>
					
					<button type="submit" id="salvar">Salvar</button>
					
				</form>
				</div>
		    
            
				
					<div class="col-md-3">
					Aviso 
						<h1>Livre Para Testes</h1>

					</div>	
				
		   
		
	</div>		
</div>
</body>
</html>