<?php
  function validarLogin($usuario,$pass,$usuarios,$passwds){
    $index = array_search($usuario, $usuarios);
    return ($passwds[$index] == $pass && $usuario != "");
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
?>