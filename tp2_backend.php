<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=-16;
    print"<p>El numero es $num</p>";
    if($num>0){
        print "<p> El numero es positivo </p>" ;
    }else{
        print "<p> El numero es negativo </p>" ;
    }

    if($num>1 and $num<10){
        print "<p> El numero es mayor a 1 y menor a 10 </p>";
    }else{
        print "<p> El numero no es mayor a 1 o no es menor a 10 </p>";
    }

    if($num<2 or $num>10){
        print "<p> El numero es mayor de 10 o menor de 2 </p>";

    }else{
        Print"<p> El numero no es mayor de 10 ni menor de 2 </p>";}

    $numero1=22;
    $numero2=20;
    print "<p>Primer numero $numero1, segundo numero $numero2 </p>";
    if($numero1== $numero2 ){
        print"“Los números ingresados son iguales";
    }else{
        if($numero1>$numero2){
            $suma=$numero1+$numero2;
            $resta=$numero1-$numero2;
            print"<p>La suma estos numeros es $suma la resta de estos numeros es $resta </p>";
        }else{
            $multi=$numero1*$numero2;
            $divi=$numero1/$numero2;
            $resto=$numero1%$numero2;
            print"<p>La multiplicacion de estos numeros es $multi, la divicion es $divi, el resto es $resto</p>";
        }
    }









    ?>
</body>
</html>