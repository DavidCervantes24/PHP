<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Problema - omegaUp</title>
    </head>
    <body>
    </body>
    <h1>OmegaUp</h1>
    <ul class="menu">
        <li><a href="Estaciones_del_año.php">Las Estaciones del Año</a></li>
        <li><a href="problema2.php">El mayor de Tres numeros</a></li>
        <li><a href="problema3.php">Cuantos valen 7</a></li>
    </ul>
    <h2>7294.cuantos valen 7</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">10.21</td>
            <td colspan="2">Límite de memoria</td>
            <td colspan="2">32 MiB</td>
        </tr>
        <tr>
            <td colspan="2">Límite de tiempo(caso)</td>
            <td colspan="2">1s</td>
            <td colspan="2">Límite de tiempo (total)</td>
            <td colspan="2">1mOs</td>
        </tr>
        <tr>
            <td colspan="2">Tamaño de entrada(bytes)</td>
            <td colspan="2">10 KiB</td>
            <td></td>
        </tr>
    </table>
    <h3>Descripcion</h3>
    <p>
    Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
    </p>
    <h3>Entrada</h3>
    <p>Dos enteros en el rango de -1000 a + 1000
        .</p>
    <h3>Salida</h3>
    <p>
    La cantidad de enteros iguales a 7.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">-3 8</td>
            <td colspan="2">0</td>
        </tr>
        <tr>
            <td colspan="2">7 57</td>
            <td colspan="2">1</td>
        </tr>
        <tr>
            <td colspan="2">62 7</td>
            <td colspan="2">1</td>
        </tr>
        <tr>
            <td colspan="2">7 7</td>
            <td colspan="2">2</td>
        </tr>
    </table>  
    <?php
     $a=7;
     $b=7;
     if($a==7 && $b==7)
     {
       echo"En estos numeros hay 2 sietes";
     }
    if($a!=7 && $b==7)
     {
       echo "en estos numeros hay 1 siete";
     }
    if($a==7 && $b!=7)
     {
      echo "En estos numeros hay 1 siete";
     }
    if($a!=7 && $b!=7)
     {
       echo "En estos numeros hay 0 sietes";
     }
    ?>
</html>