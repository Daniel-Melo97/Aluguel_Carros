<?php

class Carro{
	private $placa;
	private $marca;
	private $ano;
	private $preco_dia;
	private $status;
	private $modelo;
	
	function getPlaca(){
		return $this->placa;
	}
	function setPlaca($placa){
		$this->placa = $placa;
	}
	
	function getMarca(){
		return $this->marca;
	}
	function setMarca($marca){
		$this->marca = $marca;
	}
	
	function getAno(){
		return $this->ano;
	}
	function setAno($ano){
		$this->ano = $ano;
	}
	
	function getPreco(){
		return $this->preco_dia;
	}
	function setPreco($preco_dia){
		$this->preco_dia = $preco_dia;
	}
	
	function getStatus(){
		return $this->status;
	}
	function setStatus($status){
		$this->status= $status;
	}
	
	function getModelo(){
		return $this->modelo;
	}
	function setModelo($modelo){
		$this->modelo = $modelo;
	}
	
}


?>