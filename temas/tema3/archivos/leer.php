<?php
header("Content-Type:text/html;charset=utf-8"); //enviar
$descriptor = fopen ("miarchivo.txt","a+");
$linea_numero = 1;
while (!feof($descriptor)) {
$linea = fgets ($descriptor,4096) ;
echo "línea número: $numero_linea es: $linea","<BR>";
$linea_numero++;
}
fclose($descriptor);
?>