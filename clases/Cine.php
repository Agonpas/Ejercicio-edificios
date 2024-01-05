<?php
include_once 'Edificio.php';

class Cine extends Edificio {
    const PRECIO_MES_VIGILANTE = 1300;
    private int $aforo;

    public function __construct (string $nombre, int $numPlantas, int $superficie, int $aforo) {
        parent::__construct ($nombre, $numPlantas, $superficie);
        $this->aforo = $aforo;
    }
    /*Setters*/
    public function setAforo($aforo) {
        $this->aforo = $aforo;
    }
    /*Getters*/
    public function getAforo() {
        return $this->aforo;
    }
    public function calcularCosteVigilancia() {
        $numeroVigilantes = ceil($this->superficie / 3000);
        $costeVigilantes = $numeroVigilantes * self :: PRECIO_MES_VIGILANTE;
        echo "El coste de vigilantes para el cine " . $this->nombre .  " es de " . $costeVigilantes . " euros al mes. Necesitaremos un total de " . $numeroVigilantes . " vigilantes" . PHP_EOL;
    }
    public function proyectarSesion() {
        do {
            echo "Introduce el número de asistentes: ";
            $numAsistentes = trim(fgets(STDIN)); 
            if ($numAsistentes > $this->aforo) {
                echo "El número de asistentes no puede ser mayor que el aforo que es de $this->aforo" . PHP_EOL;
            }
        } while ($numAsistentes > $this->aforo);
        do {
            echo "Introduce el número precio de la entrada para esta sesión: ";
            $precioEntrada = trim(fgets(STDIN)); 
            if ($precioEntrada < 0) {
                echo "El precio de la entrada no puede ser negativo" . PHP_EOL;
            }
        } while ($precioEntrada < 0);
        $recaudacion = $numAsistentes * $precioEntrada;
            echo "La recaudación el cine $this->nombre es de {$recaudacion} euros." . PHP_EOL;     
    }

}
?>