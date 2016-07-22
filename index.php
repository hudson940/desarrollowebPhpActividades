<!DOCTYPE html>
<html>
 <head>
 <title>Prueba</title>
 <meta http-equiv="Content-Type"
 content="text/html; charset=ISO-8859-
1" />
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

 </head>
 <body>
     <a href='actividad3.php'> 'actividad 3' </a>
     <a href="Evidencia3_Anderson-Martinez.php">'actividad 2'</a>
     <ul>
         <li>
 <h3>Nombres: </h3>
        
         
 <?php
 echo "Luis Pablo <br />"; //Primer segmento de un programa PHP
 ?>
         </li>
         <li>
 <h3>Apellidos:</h3>
         
      
 <?php
 echo "Perez Jimenez <br />"; //Segundo segmento del mismo programa
 ?>
         </li>
         <li>
 <h3>Edad:</h3>
 <?php
     echo "26 a&ntildeos"; //Tercer segmento del mismo programa
     $a = 5;
     $b = 10;
     $c = $a+$b;
     echo $c
 ?>
         </li>
         <li>
 <h3>Direccion:</h3>
 <?php echo "<strong>cra</strong> 26 a <strong>Numero</strong> 4B-26";
 ?>
<p><b>El valor de la compra es: $</b>
 <?php
 /* En este programa se tiene la
variable $valor la cual se
 * utiliza en varios segmentos del
mismo código pudiendo
 * modificar su contenido debido a
que su ámbito se mantiene
 * dentro del mismo archivo en el
que fue declarada
 */
 $valor = 1000; /*Declaración e
inicialización de $valor*/
 echo "$valor";
 ?>
 </p>
 <p><b>M&aacute;s el IVA: $</b>
 <?php
 $valor = $valor * 1.16;
//Modificación de $valor
 echo "$valor";
 ?>
 </p>
 <p><b>M&eacute;nos el descuento de 5%: $</b>
 <?php
 $valor = $valor * 0.95;
//Modificación de $valor
 echo "$valor";
 echo $_SERVER ['SERVER_SOFTWARE'];
 $f = ++$b;
 ?>
 <ul>
         <li>
    
         
?>
             <p>
                 <?php
                 $arrayFrutas = array("pera.","mango.","cereza.","Papaya.","Manzana.");
                 foreach ($arrayFrutas as $fruta){ 
                     echo "$fruta"; }
                     ?>
                  </p>
                 
         </li>
     </ul>
 </p> 
