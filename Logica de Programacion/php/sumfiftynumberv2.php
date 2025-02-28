<?php

  //Funcion para obtener desde la consola
  function input(){
    return fgets(STDIN);
  }

  //Funcion para sumar dos cadenas de texto que contienen numeros
  //No valida que sean numeros (Puede tener problemas)
  function sum($firststring, $secondstring){
    $auxiliar = 0;
    $resultstring = "";
    for($i = strlen($firststring)-1; $i >= 0; $i--){
      $index = 0 + $firststring[$i] + $secondstring[$i] + $auxiliar;
      $resultstring = $index%10 . $resultstring;
      $auxiliar = intdiv($index, 10); 
    }
    if($auxiliar != 0){$resultstring = $auxiliar . $resultstring;}
    return $resultstring;
  }

  //Funcion que valida que la cadena contenga digitos unicamente
  function validate($string){
    for($i = strlen($string)-1; $i >= 0; $i--){
      if(ord($string[$i]) < 48 || ord($string[$i]) > 58){
        return FALSE;
      }
    }
    return TRUE;
  }

  //Funcion para llenar las candenas con ceros
  function fillstring($firststring, $secondstring){
    $difference = (strlen($firststring) - strlen($secondstring));
    if($difference >= 0){
      $secondstring = (str_repeat('0', abs($difference))) . $secondstring;
    }else{
      $firststring = (str_repeat('0', abs($difference))) . $firststring;
    }
    return [$firststring, $secondstring];
  }

  $firstnumber = "";
  $secondnumber = "";
  $conditional = true;

  //Condicional hasta que tengan los numeros correctos
  while($conditional){
    //Insertar los numeros
    echo ("Inserte el primer numero: \n");
    $firstnumber .= trim(input());
    echo ("Inserte el segundo numero: \n");
    $secondnumber .= trim(input());

    //Validacion de los numeros
    if($conditional=(!(validate($firstnumber) && validate($secondnumber)))){
      echo "Los numeros contienen caracteres no enteros \n";
      $firstnumber = ""; $secondnumber = "";
    }
  }

  //Llenar los numeros
  $aux = fillstring($firstnumber, $secondnumber);
  $firstnumber = $aux[0];
  $secondnumber = $aux[1];

  //hacer la suma
  echo("El resultado de la suma es: " . sum($firstnumber, $secondnumber));
?>