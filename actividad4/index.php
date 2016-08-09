<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teatro</title>
        <style>
body { width:50%;margin:auto;
    background-image: url("http://fc06.deviantart.net/fs71/f/2012/083/a/8/cine_png_by_isfe_by_tutorialesisfe-d4tu7d3.png"), url("http://fc06.deviantart.net/fs71/f/2012/083/a/8/cine_png_by_isfe_by_tutorialesisfe-d4tu7d3.png");
    background-color: #cccccc;
}
</style>
   
    </head>
    <body> 
        <p>    <?php
            
               
      require 'bibliotecaAct4.php';
 require 'recibeform.php';
      
      //$esce=array("1","2","3","4","5");
      
      ?>
   <?php
      
        
//LIBRERIAS PARA LAS FUNCIONES

//Se ejecuta el if cuando el usuario envie la informacion del formulario
if(isset($_REQUEST["Enviar"])){
                
                $fila = $_POST['fila']; // se obtiene la informacion luego de oprimir enviar
                $puesto= $_POST['puesto'];
                $accion= $_POST['accion'];
                $StringEscenario=$_POST['escenario'];
                $count=0;
                for($i=0;$i<5;$i++){
                    for($j=0;$j<5;$j++){
                        $count=5*$i+$j;
                        
                        $escenario[$i][$j]=substr($StringEscenario,$count,1);
                    }
                    $count=0;
                }
        
        $escenario=Accion($fila,$puesto,$accion,$escenario);//Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
        muestraListadoTabla($escenario);
}
//Se ejecuta el else if cuando el usario borra la informacion del formulario y cuando se carga la página
else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
    $escenario=array(array("L","L","L","L","L"),
                         array("L","L","L","L","L"),
                         array("L","L","L","L","L"),
                         array("L","L","L","L","L"),
                         array("L","L","L","L","L"));
    
                     muestraListadoTabla($escenario);
}
?>
     
<body>
        <table  style="width:50%;margin:auto;">
        <form method="post">
            <!-- Se separa el array $ListEscenario en un String y de oculta-->
            <input type="text" name="escenario" value="<?php foreach ($escenario as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>" style="display:none" />
            <!-- Se crean los inputs que van a capturar la información introducida por el usario y las acciones-->
            <tr>
                <td>Fila: </td>
                <td>
                    <!--Se muesta la lista con las opciones posibles para la fila-->
                    <select name="fila">
                        <option size="4">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Puesto: </td>
                <td>
                    <!--SE MUESTRAN LAS OPCIONES QUE EL USUARIO TIENE-->
                    <select name="puesto">
                        <option size="4">1</option>
                        <option size="4">2</option>
                        <option size="4">3</option>
                        <option size="4">4</option>
                        <option size="4">5</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Reservar: </td>
                <td>
                    <input type="radio" name="accion" value="R" />
                </td>
            </tr>
            <tr>
                <td>Comprar: </td>
                <td>
                    <input type="radio" name="accion" value="V" />
                </td>
            </tr>
            <tr>
                <td>Liberar: </td>
                <td>
                    <input type="radio" name="accion" value="L" checked="checked" />
                </td>
            </tr>
            <tr>
                
                <td>
                    <input type="submit" value="Enviar" name="Enviar" />
                </td>  <br>
            <p>
                <td>
                    <input type="submit" value="Borrar" name="Reset" />
                </td>
        </p>
            </tr>
        </form>
    </table>
</body>
