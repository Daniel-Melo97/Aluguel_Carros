<?php
$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");

$query = "INSERT INTO carro VALUES ('wsx-1845','chevrolet',1998,319.90,'disponivel','corsa')";
$resultado = mysqli_query($conn,$query);
	if($resultado){
		echo "Inserção feita com sucesso!";
	}else{
		echo "Falha na inserção";
	}


?>