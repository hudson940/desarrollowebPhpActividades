<?php 
function muestraListadoTabla($escenario) {
    ?>

<table style="width:50%;margin:auto;" border ="1">
     <br>
  <br>
   <br>
    <br>
     <br>
  <br>
   <br>
  <br>
  
           <thead>
            <tr>  <td style="background-color:blue;text-align: center"colspan="6">ESCENARIO</td> </tr>
        <td>&nbsp;&nbsp;</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </thead>
   <?php 
   $i=1;
foreach ($escenario as $fila) {
    echo "<tr>";
       echo "<th>";
       echo $i;
       echo "</th>";
    foreach ($fila as $silla) {
        echo "<td>";
        echo $silla;
        echo "</td>";
    }
    echo "</tr>";
    $i++;
    }
         ?>
    </table>
                      
    

        
     <?php 
}