<?php
error_reporting(0);
session_start();
if($_SESSION['cliente'] == null){
	header("location: index.php");
}

$nome = $_SESSION['cliente'] ['nome'];
$cpf = $_SESSION['cliente'] ['cpf'];

?>

<html>
<head>
<html lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
</head>
<body>
	<div class="jumbotron">
	  <h1 class="display-4">Seja bem vindo, <?php echo $nome;?></h1>
	  <hr class="my-4">
	  <div align="right">
		<button type="submit" class="btn btn-danger" id="btn_logout" value="logar">Sair</button>
	  </div>
	</div>


	<div id="accordion">
	  <div class="card">
		<div class="card-header" id="headingOne">
		  <h5 class="mb-0">
			<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			  Alugar Carro
			</button>
		  </h5>
		</div>

		<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
		  <div class="card-body">
			<!--
			Texto breve explicando ao usuário como ele irá alugar o carro + botão que abrirá modal 
			-->
		  </div>
		</div>
	  </div>
	  <div class="card">
		<div class="card-header" id="headingTwo">
		  <h5 class="mb-0">
			<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			  Atualizar seus dados
			</button>
		  </h5>
		</div>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		  <div class="card-body">
			
		  </div>
		</div>
	  </div>
	  <div class="card">
		<div class="card-header" id="headingThree">
		  <h5 class="mb-0">
			<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			  Deletar sua conta
			</button>
		  </h5>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		  <div class="card-body">
			
		  </div>
		</div>
	  </div>
	</div>


</body>

<script type="text/javascript">
$('#btn_logout').click(function(){
	window.location.href = "logout.php";

});



</script>

</html>