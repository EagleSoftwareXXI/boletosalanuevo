<?php

/* 
 * En esta parte se crea la tabla y los encabezados.
 */

function Escenario($ListEscenario){
    //Se crea la tabla y sus correspondientes encabezados y el estilo
    echo "<table class='tg' border='1' style='margin:auto;'>";
            echo "<tr>";
            echo "<th colspan='6'>Escenario</th>";
            echo "<tr>";
                /*-- Se crean los encabezados de las tabla*/
                echo "<th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th> 
                <th>5</th>
            </tr>";
    //Se recorre el Arreglo con un foreach y se imprime cada fila y columna de la tabla
    $i=1;
    foreach ($ListEscenario as $fila) {
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
    echo "</table>";
  }

?>
