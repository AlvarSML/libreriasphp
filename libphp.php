<?php
  function validarLogin($usuario,$pass,$usuarios,$passwds){
    $index = array_search($usuario, $usuarios);
    return ($passwds[$index] == $pass && $usuario != "");
  }

//Autentificacion con un array de 2 dimensiones
/* EJEMPLO DE ARRAY
$usuarios = [ //Mismo usurio y pass
    ["admin1","Admin1", "administrador"],
    ["prof1", "Prof1", "profesor"],
    ["alum1", "Alumno", "alumumno"]
];*/

function autenticar($nombre, $pass, $array){ //Se le pasa el array por parametro porque no reconoce el array de fuera de la funcion aunque lo nombres igual
    for($i = 0; $i < sizeof($array); $i++){
        if($nombre == $array[$i][0] && $pass == $array[$i][1]){           
            $_SESSION['usuario_valido'] = $nombre;
            $_SESSION['rol'] = $array[$i][2];
        }
    }
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

// ALGORITMO BURBUJA
function burbuja($A,$n)
{
    for($i=1;$i<$n;$i++)
    {
        for($j=0;$j<$n-$i;$j++)
        {
            if($A[$j]>$A[$j+1]){
                $k=$A[$j+1];
                $A[$j+1]=$A[$j];
                $A[$j]=$k;
            }
        }
    }

    return $A;
}

//inserccion biaria
function insercionBinaria($A,$n)
{
    for($i=1;$i<$n;$i++)
    {
        $aux = $A[$i];
        $izq=0;
        $der=$i-1;
        
        while($izq<=$der)
        {
            $m=(($izq+$der)/2);
            if ($aux<$A[$m])
                $der=$m-1;
            else
                $izq=$m+1;
        }
        $j=$i-1;
        
        while($j>=$izq)
        {
            $A[$j+1]=$A[$j];
            $j=$j-1;
        }
        $A[$izq]=$aux;
    }
    
    return $A;
}

//ordenacion por shell
function ordenamientoShell($A,$n)
{
  for($inc = 1 ; $inc<$n;$inc=$inc*3+1);
   
    while ($inc > 0)
    {
      for ($i=$inc; $i < $n; $i++)
      {
        $j = $i;
        $temp = $A[$i];
        while (($j >= $inc) && ($A[$j-$inc] > $temp))
        {
          $A[$j] = $A[$j - $inc];
          $j = $j - $inc;
        }
        
        $A[$j] = $temp;
      }
      
      $inc/= 2;
    }
    
    return $A;
  }
?>

