<!DOCTYPE html>
<html>
    <head>
        <title>Actividad 2</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
         <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>
        <h3>Actividad 2 arreglos</h3>
        <?php
        /* Anderson David Martinez para el curso desarrollo web en PHP actividad 
         * de aprendizaje 2 
         */
        /* En este programa se va a especificar la forma y uso arreglos y acceder a la información que contiene
         */
        //Arreglo multidimensional 
        $directorio = array(
      array("Nombre"=>"David Martinez", "direccion"=>"Carrera 29 A N 4A-63",
          "Telefono"=>"3208499843","Aniversario"=>"17-Abril","colorFavorito"=>"rojo"),
      array("Nombre"=>"Pablo Manrique", "direccion"=>"calle 23 # 56-45",
          "Telefono"=>"3321567","Aniversario"=>"12-Diciembre","colorFavorito"=>"verde"),
         
            array ("Nombre"=>"Xiomara Vasquez", "direccion"=>"calle 40 # 58-25",
          "Telefono"=>"3102405452","Aniversario"=>"15-agosto","colorFavorito"=>"morado"));
        //arreglo para el significado
        function colorFavorito ($colorBuscado){
        $colorSignificado= array(array("color"=>"verde","sig"=>"esperanza"),array("color" => "morado","sig" => "luto"));
        foreach ($colorSignificado as $colorSignificado) { if ($colorSignificado['color']==$colorBuscado) {return $colorSignificado ['sig'];} else
        {
            return "no se encuentra significado";
        }
    }
}
?>
        <table class="col-"><tr bgcolor= red><th>Nombre</th><th>
            Direccion</th><th>Telefono</th><th>Cumpleaños</th><th>Color Favorito</th> <th>Significado</th></tr>
    <tr><td> <?php foreach ($directorio as $tabla) { echo "<hr>".$tabla['Nombre']; }
     
    ?></td>
    <td><?php foreach ($directorio as $tabla) { echo "<hr>".$tabla['direccion']; }
     
  ?></td>
      <td><?php foreach ($directorio as $tabla) { echo "<hr>".$tabla['Telefono']; }
     
  ?></td>
        <td><?php foreach ($directorio as $tabla) { echo "<hr>".$tabla['Aniversario']; }
     
  ?></td>
          <td><?php foreach ($directorio as $tabla) { echo "<hr>".$tabla['colorFavorito']; }
     
  ?></td>
          <td><?php foreach ($directorio as $tabla) { echo "<hr>" .colorFavorito ($tabla['colorFavorito']); }
     
  ?></td>
      
      
         
         
  </td>    </tr>
    
      
               
    </body>
</html>
