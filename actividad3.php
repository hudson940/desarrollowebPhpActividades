<!DOCTYPE html>
<html>
    <head>
        <title>Actividad 3</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
         <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>
        <h1 class="center-block">Actividad 3 funciones</h1>
             <p class="carousel"> <h2>
   <?php 
   /* Anderson David Martinez para el curso desarrollo web en PHP actividad 
         * de aprendizaje 3
         */
        /* En este programa se va a utilizar funciones en php
         */
   include 'biblioteca_actividad3.php'; //se incluye el archivo que contiene la funcion
   
        
   echo "<h2>".operaciones("58", "49","mas"); // se llama la funcion con el argumento mas
            echo "<h2>".operaciones("30", "50","menos");
              echo "<h2>".operaciones("56", "7","por");// se llama la funcion sin el tercer argumento
                echo "<h2>".operaciones("6000", "2000");
                    echo "<h2>".operaciones("3", "6","sobre");
                    ?>
            <h2>
               </p>
    </body>
</html>
