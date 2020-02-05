<?php
include "Classes/ClasseCarro.php";
//$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");

function inserir_carro($carro){
	$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");

	$placa = $carro->getPlaca();
	$marca = $carro->getMarca();
	$ano = $carro->getAno();
	$preco_dia = $carro->getPreco();
	$status = $carro->getStatus();
	$modelo = $carro->getModelo();
	
	$query = "INSERT INTO carro VALUES ('$placa','$marca',$ano,$preco_dia,'$status','$modelo')";
	$resultado = mysqli_query($conn,$query);
	if($resultado){
		echo "Inserção feita com sucesso!";
	}else{
		echo "Falha na inserção";
	}
	
	mysqli_close($conn);
}

function deletar_carro($placa){
	$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");
	$query = "DELETE FROM carro WHERE placa = '$placa'";
	$resultado = mysqli_query($conn,$query);
	if($resultado){
		echo "Deletado com sucesso!";
	}else{
		echo "Falha na remoção";
	}
	mysqli_close($conn);
}

function atualizar_carro($carro){
	$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");
	$placa = $carro->getPlaca();
	$marca = $carro->getMarca();
	$ano = $carro->getAno();
	$preco_dia = $carro->getPreco();
	$status = $carro->getStatus();
	$modelo = $carro->getModelo();
	
	$query = "UPDATE carro SET marca='$marca',ano=$ano,preco_dia=$preco_dia,status='$status',modelo='$modelo' WHERE placa='$placa'";
	$resultado = mysqli_query($conn,$query);
	if($resultado){
		echo "Atualizado com sucesso!";
	}else{
		echo "Falha na atualização";
	}
	mysqli_close($conn);
}

function buscar_carro($placa){
	$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");
	$query = "SELECT * FROM carro WHERE placa = '$placa'";
	$resultado = mysqli_query($conn,$query);
	$aux = mysqli_fetch_assoc($resultado);
	$objeto = new Carro();
	$objeto->setPlaca($aux['placa']);
	$objeto->setMarca($aux['marca']);
	$objeto->setAno($aux['ano']);
	$objeto->setPreco($aux['preco_dia']);
	$objeto->setStatus($aux['status']);
	$objeto->setModelo($aux['modelo']);
	
	return $objeto;
}

?>