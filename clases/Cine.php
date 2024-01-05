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
        echo "Introduce el número de asistentes: ";
        $numAsistentes = trim(fgets(STDIN));
    }

}
?>