<html>
    <body>
        <H1>ESTRUCTURA DE COONTROL (IF)</H1>

    </body>
</html>
<?php
$a=25;
$b=30;
if($a>$b)
{
    echo "El mayor es ", $a,"<br>";
}
#IF ELSE
echo "RESULTADO DEL IF ELSE HR <br>";
if($a>=$b)
{
    echo "El mayor es A:", $a, "<br>";
}
else
{
    echo "El mayor es B: ", $b, "<br>";
}
#IF ELSE IF ***********
$estacion="invierno";
if($estacion=="invierno")
{
    echo "Invierno del 21 de diciembre al 20 de marzo";

}
elseif($estacion=="primamera")
{
    echo "verano, del 21 de marzo al 20 de junio";
}
elseif($estacion=="verano")
{
    echo "primavera, del 21 de junio al 20 de septiembre";
}
?>