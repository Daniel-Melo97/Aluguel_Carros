<?php

class Cliente{
	private $nome;
	private $cpf;
	private $cnh;
	private $email;
	private $senha;
	private $endereco;
		
	function getNome(){
		return $this->nome;
	}
	function setNome($nome){
		$this->nome = $nome;
	}
	
	function getCpf(){
		return $this->cpf;
	}
	function setCpf($cpf){
		$this->cpf = $cpf;
	}
	
	function getCnh(){
		return $this->cnh;
	}
	function setCnh($cnh){
		$this->cnh = $cnh;
	}
	
	function getEmail(){
		return $this->email;
	}
	function setEmail($email){
		$this->email= $email;
	}
	
	function getSenha(){
		return $this->senha;
	}
	function setSenha($senha){
		$this->senha = $senha;
	}
	
	function getEndereco(){
		return $this->endereco;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
}


?>