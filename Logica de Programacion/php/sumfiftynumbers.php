<?php 
  function input(){
    return fgets(STDIN);
  }
  $test = false;
  $firstnumber = "";
  $secondnumber = "";
  $index = 0;
  $result = "";
  $llevar = 0;

  do{
    //Insertar los numeros
    echo ("Inserte el primer numero: \n");
    $firstnumber .= trim(input());
    echo ("Inserte el segundo numero: \n");
    $secondnumber .= trim(input());

    //obtener un puntero
    $suma = (strlen($firstnumber) - strlen($secondnumber));   
    $contador = abs($suma);
    if($suma >= 0){
      $secondnumber = (str_repeat('0', $contador)) . $secondnumber;
    }else{
      $firstnumber = (str_repeat('0', $contador)) . $firstnumber;
    }
    $contador = strlen($firstnumber);
    try{
      for($contador--; $contador >= 0; $contador--){
        $index = (0 + $firstnumber[$contador]) + $secondnumber[$contador] + $llevar;
        $result = $index%10 . $result;
        $llevar = intdiv($index,10);
      }
      if($llevar != 0){$result = $llevar . $result;}
      $test = false;
    }catch(Exception $e){
      echo($e->getMessage() . "\n");
      echo("Inserte dos numeros validos \n");
      $test = true;
    }
  }while($test);  
  //Acabar, no se que paso, pero salioF
  echo(">>RESULTADO: $result <<");
?>