<?php
require_once("01_objAuto.php");

$objVehiculo = new Vehiculo("MCN-930","MAZDA",2020,45500,70,30);
$objVehiculo->getVehiculo();

print_r('<pre>');
print_r($objVehiculo);
print_r('</pre>');

echo "<br>";
echo $objVehiculo->marca;
echo "<br>";
echo "la distancia recorrida es : ".$objvehiculo->calculo_distancia()
?>