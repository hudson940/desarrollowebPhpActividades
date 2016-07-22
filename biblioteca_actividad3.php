<?php

/* 
 * biblioteca que contiene la funcion de operaciones
 */
 
    function operaciones($a,$b,$operador="mas"){
        //$op=array ("suma"=>"s","resta"=>"r","mult"=>"m","div"=>"d")
    if ($operador=='mas'  ){echo "el resultado de $a $operador $b es "; echo $a + $b;} 
    if ($operador=='menos'  ){echo "el resultado de $a $operador $b es "; echo $a - $b;}
    if ($operador=='sobre'  ){echo "el resultado de $a $operador $b es "; echo $a / $b;}
    if ($operador=='por'  ){echo "el resultado de $a $operador $b es "; echo $a * $b;}
   
    }
       
        
    
          
 
   
?>

