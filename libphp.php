<?php
  function validarLogin($usuario,$pass,$usuarios,$passwds){
    $index = array_search($usuario, $usuarios);
    return ($passwds[$index] == $pass && $usuario != "");
  }


function ordenar($array){
	
	for ($i=0;$i<count($array);$i++){
		$indiceMenor = $i;
		for ($j=$i+1;$j<count($array);$j++){
			
			if ($array[$j]< $array[$indiceMenor]){				
				$indiceMenor =$j;				
			}
		}
		if ($i != $indiceMenor){
			
			$aux = $array[$i];
			$array[$i] = $array[$indiceMenor];
			$array[$indiceMenor] = $aux;
		}
		
	}
  return $array;
	
}

function addOrdenado($value,$arr) {
  if (empty($arr)){
    $arr[0] = $value;
  } else if (end($arr)<$value){
    array_push($arr, $value);
  }else {

    for ($i=0; $i < count($arr); $i++) { 
      if ($value<$arr[$i]) {
        $aux = $arr[$i];
        $arr[$i] = $value;
        $value = $aux;
      }
    }

    $arr[count($arr) + 1] = $value;
  }

  return $arr;
}

function registrar($usuario,$pass,$usuarios,$passwds){
  if ($usuario != "" && $pass != "") {
    array_push($usuarios,$usuario);
    array_push($passwds,$pass);
    return true;
  } else {
    return false;
  }
}

function verArray($arr){
  for ($i=0; $i < count($arr); $i++) { 
    echo (strval($i).": ".strval($arr[$i])."<br>");
  }
}

verArray([1,2,3,4]);

?>