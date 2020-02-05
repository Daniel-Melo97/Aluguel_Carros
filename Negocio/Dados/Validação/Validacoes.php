<?php
function valid_Chassi($chassi){
	$pos = strpos($chassi,'0');
	$espaco = strpos($chassi,' ');
	if((is_numeric($pos) and $pos != 0) or is_bool($pos)){
		if(strlen($chassi)!= 17){
			return false;
		}else if(is_numeric($espaco)){
			return false;
		}else{
			return true;
		}
	}else{
		return false;
	}
	
}

if(valid_Chassi('11111111111111101')){
	echo 'chassi valido';
}else{
	echo 'chassi invalido';
}



?>