<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "hola mundo ";
    $saludo ="hola mundo ";
    print $saludo;
    $num1=30;
    $num2=10;
    $suma= $num1+$num2;
    $multi= $num1*$num2;
    $resta= $num1-$num2;
    $divi= $num1/$num2;
    $restoDivi= $num1%$num2;
    print "<p>el resultado de la suma es $suma,de la multiplicaciones $multi,de la resta es $resta y de la division es $divi , el resto es $restoDivi </p>";

    $gradosc =20;
    $trasformacionFahrenheit=(1.8*$gradosc)+32;
    print "<p>la transformacion de grados Celsius a Fahrenheit es $trasformacionFahrenheit </P>";

    $ladoa=18;
    $ladob=12;
    $radio=30;
    $areaRectangulo=$ladoa*$ladob;
    $perimetroRectangulo=($ladoa+$ladob)*2;
    print "<p>el perimetro del rectangulo es $perimetroRectangulo y el area es $areaRectangulo </p>";
    define ("PI",3.14);
    $perimetroCirculo=PI *($radio*2);
    $areaCirculo=PI *($radio**2);
    print "<p>el perimetro del circulo es $perimetroCirculo y el area es $areaCirculo</p>";
    ?>
</body>
</html>