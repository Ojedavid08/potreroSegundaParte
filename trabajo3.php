<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print ("<p>ejercicio 1 </p>");
    for ($i=1;$i<101;$i++)
    print ("<p>N°$i </p>");

    print ("<p>ejercicio 2 </p>");
    for ($i=100;$i>0;$i--)
    print ("<p>N°$i </p>");

    print ("<p>ejercicio 3 </p>");
    for ($i=1;$i<101;$i++)
    if ($i % 2==0){
        print ("<p>N°$i </p>");
    }

    print ("<p>ejercicio 4 </p>");
    for ($i=1;$i<101;$i++)
    if ($i % 2>0){
        print ("<p>N°$i </p>");
    }

    print ("<p>ejercicio 5 </p>");
    $c=0;
    $i=0;
    do{
        $i++;
        $c=$i+$c;
        print ("<p>N°$c </p>");
    }while ($i<20);

    print ("<p>ejercicio 6 </p>");
    $c=0;
    $i=0;
    do{
        $i++;
        if ($i%2==0){
            $c=$i+$c;
            print ("<p>N°$c </p>");
        }
    }while ($i<20)

    ?>
</body>
</html>