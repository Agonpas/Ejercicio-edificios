<?php
include_once 'Edificio.php';

class Hospital extends Edificio {
    const PRECIO_MES_VIGILANTE = 1300;
    private int $numCamas;

    public function __construct (string $nombre, int $numPlantas, int $superficie, int $numCamas) {
        parent::__construct ($nombre, $numPlantas, $superficie);
        $this->numCamas = $numCamas;
    }
    /*setters*/
    public function setNumCamas(int $numCamas) {
        $this->numCamas = $numCamas;
    }
    /*getters*/
    public function getNumCamas() : int{
        return $this->numCamas;
    }
    public function calcularCosteVigilancia() {
        $numeroVigilantes = ceil($this->superficie / 1000);
        $costeVigilantes = $numeroVigilantes * self :: PRECIO_MES_VIGILANTE;
        echo "El coste de vigilantes para el hospital $this->nombre es de {$costeVigilantes} euros al mes. Necesitaremos un total de  {$numeroVigilantes} vigilantes" . PHP_EOL;
    }
    public function repartirComidas() {
        $numRaciones = $this->numCamas * 3;
        echo "Se está repartiendo {$numRaciones} raciones";
    }
}
?>