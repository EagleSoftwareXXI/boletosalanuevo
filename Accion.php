<?php
 /* 
 * En esta función se evaluan las opciones del usuario.
 */
 
function Accion($fila,$puesto,$accion,$ListEscenario){
        //Se evalua la opción del usuario dependiendo de lo contenido en el arreglo
        //Si el puesto elegido por el usuario esta libre se modifica el arreglo con la acción elegida
        if($ListEscenario[$fila-1][$puesto-1]=="L"){
            $ListEscenario[$fila-1][$puesto-1]=$accion;
        }
        //Si el puesto elegido por el usuario esta vendido se muestra un mensaje con notificación de Vendido
          else if($ListEscenario[$fila-1][$puesto-1]=="V"){
            echo "<script>alert('...EL PUESTO SE ENCUENTRA YA VENDIDO.";
            if($accion=="L"){echo " No se puede liberar";}
            else if($accion=="R"){echo " No se puede reservar";}
            else if($accion=="V"){echo " No se puede volver a vender";}
            echo "')";
            echo "</script>'";
        }
        //Si el puesto elegido por el usuario esta reservado y la accion es reservar se muestra una mensaje indicando que ya esta reservado
        else if($ListEscenario[$fila-1][$puesto-1]=="R" && $accion=="R"){
            echo "<script>
            alert('...EL PUESTO YA ESTA RESERVADO. ');
            </script>'";
        }
        //Si el puesto esta reservado y la accion es diferente a reservar se modifica el Arreglo con la accion elegida por el usuario
        else if($ListEscenario[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $ListEscenario[$fila-1][$puesto-1]=$accion;
        }
        //Se retorna la información del Arreglo modificado según las entradas dadas por el usuario
        return $ListEscenario;
}
?>
