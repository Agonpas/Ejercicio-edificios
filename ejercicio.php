<?php
include_once 'clases/Edificio.php';
include_once 'clases/Cine.php';
include_once 'clases/Hospital.php';
include_once 'clases/Hotel.php';
/*instanciamos cine, hospital y hotel*/
$cine1 = new Cine("Bosque", 4, 3500, 500);
$hospital1 = new Hospital("Sant Pau", 8, 10000, 600);
$hotel1 = new Hotel("Arts", 50, 20000, 150);
/*probamos setters*/
$cine1->setNombre("Cinesa Diagonal");
$cine1->setSuperficie(3200);
/*probamos getters*/
echo $cine1->getNombre() . PHP_EOL;
echo $cine1->getNumPlantas() . PHP_EOL;
echo $cine1->getSuperficie() . PHP_EOL;
echo $cine1->getAforo() . PHP_EOL;
echo PHP_EOL;
echo $hospital1->getNombre() . PHP_EOL;
echo $hospital1->getNumPlantas() . PHP_EOL;
echo $hospital1->getSuperficie() . PHP_EOL;
echo $hospital1->getNumCamas() . PHP_EOL;
echo PHP_EOL;
echo $hotel1->getNombre() . PHP_EOL;
echo $hotel1->getNumPlantas() . PHP_EOL;
echo $hotel1->getSuperficie() . PHP_EOL;
echo $hotel1->getNumHabitaciones() . PHP_EOL;
/* Calculos del coste de limpieza*/
echo PHP_EOL;
$cine1->calcularCosteLimpieza();
echo PHP_EOL;
$hospital1->calcularCosteLimpieza();
echo PHP_EOL;
$hotel1->calcularCosteLimpieza();
/*Uso del toString*/
echo PHP_EOL;
echo $cine1;
echo PHP_EOL;
echo $hospital1;
echo PHP_EOL;
echo $hotel1;
echo PHP_EOL;
/* Calculos del coste de limpieza*/
$cine1->CalcularCosteVigilancia();
$hospital1->CalcularCosteVigilancia();
$hotel1->CalcularCosteVigilancia();
/*Uso método repartir comidas*/
echo PHP_EOL;
$hospital1->repartirComidas();

?>