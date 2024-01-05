<?php
include_once 'Edificio.php';

class Hotel extends Edificio {
    const PRECIO_MES_VIGILANTE = 1300;
    const PLUS_PELIGROSIDAD = 500;
    private int $numHabitaciones;

    public function __construct (string $nombre, int $numPlantas, int $superficie, int $numHabitaciones) {
        parent::__construct ($nombre, $numPlantas, $superficie);
        $this->numHabitaciones = $numHabitaciones;
    }
    /*Settrs*/
    public function setNumHabitaciones(int $numHabitaciones) {
        $this->numHabitaciones = $numHabitaciones;
    }
    /*Getters*/
    public function getNumHabitaciones() : int {
        return $this->numHabitaciones;
    }
    public function CalcularCosteVigilancia(){
        $numeroVigilantes = ceil($this->superficie / 1000);
        $costePlusPeligrosidad = $numeroVigilantes * self :: PLUS_PELIGROSIDAD;
        $costeVigilantes = ($numeroVigilantes * self :: PRECIO_MES_VIGILANTE) + $costePlusPeligrosidad;
        echo "El coste de vigilantes para el hotel " . $this->nombre .  " es de " . $costeVigilantes . " euros al mes. Necesitaremos un total de " . $numeroVigilantes . " vigilantes" . PHP_EOL;
    }
}
?>