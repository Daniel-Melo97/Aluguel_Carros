<?php
include "Classes/ClasseCliente.php";


function inserir_cliente($cliente){
	if(verifica_email($cliente->getEmail()) == true){
		$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");

		$cpf = $cliente->getCpf();
		$nome = $cliente->getNome();
		$cnh = $cliente->getCnh();
		$email = $cliente->getEmail();
		$senha = $cliente->getSenha();
		$endereco = $cliente->getEndereco();
		
		$query = "INSERT INTO cliente VALUES ('$cpf','$nome','$cnh','$email','$senha','$endereco')";
		$resultado = mysqli_query($conn,$query);
		if($resultado){
			echo "Inserção feita com sucesso!";
		}else{
			echo "Falha na inserção";
		}
		
		mysqli_close($conn);
	}else{
		echo 'Email já está cadastrado';
	}
	
}

function login($email,$senha){
	$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");
	$query = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
	$resultado = mysqli_query($conn,$query);
	mysqli_close($conn);
	if(mysqli_num_rows($resultado) > 0){
		$aux = mysqli_fetch_assoc($resultado);
		$objeto = new Cliente();
		$objeto->setNome($aux['nome']);
		$objeto->setCpf($aux['cpf']);
		$objeto->setCnh($aux['cnh']);
		$objeto->setEmail($aux['email']);
		$objeto->setEndereco($aux['endereco']);
		
		return $objeto;
	}else{
		return "Email ou senha incorretos";
	}
	
}

function verifica_email($email){
	$conn = mysqli_connect("localhost", "root","","aluguel") or die("Erro ao conectar");
	$query = "SELECT * FROM cliente WHERE email = '$email'";
	$resultado = mysqli_query($conn,$query);
	mysqli_close($conn);
	if(mysqli_num_rows($resultado) > 0){//se houver registro, significa que o email já está sendo usado, portanto deve retornar falso
		return false;
	}else{//caso contrário, significa que o email está disponível, deve retornar verdadeiro
		return true;
	}
}
?>