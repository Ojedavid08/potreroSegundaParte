<?php
$usuar="yo";
$contraseña="1991";
$ingUsuario= $_POST["usuario"];
$ingPass = $_POST ["pass"];

if($ingUsuario== $usuar and $ingPass== $contraseña){
    print "<p> bienvenido </p>";
}else{print'<img src="iman/nono.jpg">';
}

?>