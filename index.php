<!DOCTYPE html>
	<?php
	include 'Negocio/Dados/Repositorio_Cliente.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = test_input($_POST["email_login"]);
		$senha = test_input($_POST["senha_login"]);
		$resultado = login($email,$senha);
		if(is_string($resultado) == true){
			echo '<script language="javascript">';
			echo 'alert("login falhou")';
			echo '</script>';
		}else{
			session_start();
			$_SESSION['cliente'] = array('nome'=>$resultado->getNome(),'cpf' => $resultado->getCpf());
			header("Location: TelaCliente.php");		
		}
		
		
	}





	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	?>


<html>
<html lang="en">
<meta charset="UTF-8">

<head>
<title>Aluga Carro</title>
<meta name="author" content="Daniel Lemos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="CSS/Error.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>		
</head>



<body>

<div style="background-color:#b3ffff">

	<div class="jumbotron" style="background-color:#008fb3">
	  <h1 class="display-4" style="color:#e6faff">Aluguel de carros</h1>
	  <p class="lead" style="color:#e6faff">Um site simples feito para automatizar um sistema de aluguel de carros</p>
	  <hr class="my-4">
	  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_info">
		Saiba mais
	  </button>
	</div>
	
	<div class="modal fade" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Info</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			Este software trata-se de uma atividade prática para desenvolvimento e aprendizado de conhecimentos do desenvolvedor
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		  </div>
		</div>
	  </div>
	</div>
	
	
	<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content" style="background-color:#b3ffff">
		  <div class="modal-header" style="background-color:#008fb3">
			<h5 class="modal-title" id="exampleModalLabel" style="color:#e6faff">Login</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="form_login" method="post" action="">
				<div class="row">
					<div class="col-sm-10">
						<label for="email_login" style="color:#007a99">Email:</label>
						<input type="email" class="form-control" placeholder="exemplo@exe.com" required id="email_login" name="email_login"></input>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10">
						<label for="senha_login" style="color:#007a99">Senha</label>
						<input type="password" class="form-control" required id="senha_login" name="senha_login"></input>
					</div>
					<br>
					<p style="color:#007a99">Não possui conta?, clique <a href="#">aqui</a></p> 
				</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-success" id="btn_login" value="logar">Logar</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	

	<div class="container-sm" align="center">
		<div class="row">
			<div class = "col-sm-6">
					<div class="card border-primary" style="width: 300px; background-color:#008fb3;" align="center">
					  <img src="images/rent_cars.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
						<h5 class="card-title" style="color:#e6faff">Alugar carro</h5>
						<p class="card-text" style="color:#e6faff">Se deseja alugar um carro, clique no botão abaixo.</p>
						<a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_login">Alugar</a>
					  </div>
					</div>
			</div>		
			<div class = "col-sm-6">
					<div class="card border-info" style="width: 300px; background-color:#008fb3;" align="center">
					  <img src="images/configures.png" class="card-img-top">
					  <div class="card-body">
						<h5 class="card-title" style="color:#e6faff">Gerenciar dados</h5>
						<p class="card-text" style="color:#e6faff">Se deseja gerenciar o BD, clique no botão abaixo.</p>
						<a href="#" class="btn btn-success">Gerenciar</a>
					  </div>
					</div>
			</div>	
		</div>
	</div>	
</div>
	
</body>
<script type="text/javascript">
$('#form_login').validate({
	rules:{
		email_login:{
			required:true,
			email:true
		},
		senha_login:{
			required:true
		}
	},
	messages:{
		email_login:{
			required:"Por favor, informe o seu email",
			email:"Por favor, informe um email válido"
		},
		senha_login:{
			required:"A senha está vazia"
		}
	}
});



</script>


</html>