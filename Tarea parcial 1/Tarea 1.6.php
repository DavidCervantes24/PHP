<html>
<h1>2765.Sumando dos conjuntos</h1>

<table border="1" cellspacing="3" cellpading="3" class="ejemplos">
<tr>
<td><strong>puntos</strong></td><td>9.96</td><strong>
<td>Limite de memoria</td></strong><td>32<br>MiB</td>
</tr>
<tr>
<td><strong>Limite de tiempo (caso)</strong></td><td>1s</td>
<td><strong>Limite de tiempo (total)</strong></td><td>1m0s</td>
<tr>
<td><strong>tamaño limite de entrada (bytes)</strong></td><td>10<br>KiB</td>
</tr>
</table>
<h1>Descripcion</h1>
<h4>Dados dos conjuntos de enteros de tamaño N,
    imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:

2 3 4 5

6 7 1 3

El resultado de sumarlos es:

8 10 5 8</h4>
<h1>Entrada</h1>
<h4>En la primera línea el entero N. En la segunda línea, 
    separados por un espacio, los números del primer conjunto. 
    En la tercera línea también separados por un espacio, 
    los números del segundo conjunto.</h4>
    <h1>Salida</h1>
    <h4>Los números resultantes de sumar ambos conjuntos, 
        separados por un espacio.</h4>
        <h1>Ejemplos</h1>  
        <h2>Entrada <span> salida </span> Descripcion</h2>
    <table border="1" cellspacing="3" cellspading="3" >
     <tr>
    <td>4<br>2 3 4 5<br>6 7 1 3</td><td>8 10 5 8</td><td>2+6, 3+7, 4+1, 5+3.</td>
</tr>

<?php

$N = intval(trim(fgets(STDIN)));
$set1 = array_map('intval', explode(' ', trim(fgets(STDIN))));
$set2 = array_map('intval', explode(' ', trim(fgets(STDIN))));


$result = array();
for ($i = 0; $i < $N; $i++) {
    $result[] = $set1[$i] + $set2[$i];
}

echo implode(' ', $result);
?>


</html>