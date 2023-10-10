<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print("ejercicio 1 ");
    $cont=0;
    $i=0;
    $array1=[];
    print"<pre>\n";
    do{
        $i+=2;
        $array1[]=$i;
        $cont++;
    }while ($cont<10);
    print_r ($array1);

    print("ejercicio 2 ");
    print"<pre>\n";
    $array2=["Pedro", "Ana", 34 , 1];
    print_r ($array2);
    
    print("ejercicio 3 ");
    print"<pre>\n";
    $array3=[
        "Nombre"=> "Pedro ",
        "Apellido"=> "Torres",
        "Dirección"=> "Av. Mayor 3703",
        "Teléfono"=> "1122334455",
    ];
    print_r ($array3);

    print("ejercicio 4 ");
    print"<pre>\n";
    $array4=["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles y 
    Chicago" ];
    $i=-1;
    foreach ($array4 as $valor){
        $i++;
        print("<p>La ciudad con el índice  $i tiene el nombre $valor </p>");
    }
    
    print("ejercicio 5 ");
    print"<pre>\n";
    $array5=["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles y 
    Chicago" ];
    $array5=[
        "MD" => "Madrid",
        "BCL" => "Barcelona",
        "LD" => "Londres", 
        "NY" => "New York",
        "LA" => "Ángeles",
        "CCG" => "Chicago"
    ];
    foreach ($array5 as $indice => $valor){
        print("<p>El índice de $valor es $indice </p>");
    }

    ?>
</body>
</html>