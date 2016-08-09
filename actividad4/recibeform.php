<?php
function Accion($fila,$puesto,$accion,$escenario){
        //Se evalua la opción del usuario dependiendo de lo contenido en el Array
        //Si el puesto elegido por el usuario esta libre se modifica el Array con la acción elegida
        if($escenario[$fila-1][$puesto-1]=="L"){
            $escenario[$fila-1][$puesto-1]=$accion;
        }
        //Si esta vendido muestra alerta
        else if($escenario[$fila-1][$puesto-1]=="V"){
            echo "<script>alert('El puesto ya esta vendido";
            if($accion=="L"){echo " no se puede liberar";}
            else if($accion=="R"){echo " no se puede reservar";}
            else if($accion=="V"){echo " no se puede volver a vender";}
            echo "')";
            echo "</script>'";
        }
        //Si esta reservado muestra alerta
        else if($escenario[$fila-1][$puesto-1]=="R" && $accion=="R"){
            echo "<script>
            alert('El puesto ya esta Reservado');
            </script>'";
        }
        // si esta reservado, puede pasar a compra o liberar
        else if($escenario[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $escenario[$fila-1][$puesto-1]=$accion;
        }
        //Se retorna el Array modificado
        return $escenario;
}
?>