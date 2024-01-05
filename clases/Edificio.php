<?php
 abstract class Edificio {
    const PRECIO_LIMPIEZA_POR_MINUTO = 1;
    protected string $nombre;
    protected int $numPlantas;
    protected int $superficie;

    public function __construct(string $nombre, int $numPlantas, int $superficie) {
        $this->nombre = $nombre;
        $this->numPlantas = $numPlantas;
        $this->superficie = $superficie;
    }
    public function __toString() {
        return "Edificio: " . $this->nombre . PHP_EOL . "Plantas: " .  $this->numPlantas . PHP_EOL .  "Superficie: " . $this->superficie . PHP_EOL ;
    }
    /*Setters*/
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
    public function setNumPlantas(int $numPlantas) {
        $this->numPlantas = $numPlantas;
    }
    public function setSuperficie(int $superficie) {
        $this->superficie = $superficie;
    }
    /*Getters*/
    public function getNombre() : string {
        return $this->nombre;
    }
    public function getNumPlantas() : int {
        return $this->numPlantas;
    }
    public function getSuperficie() : int {
        return $this->superficie;
    }
    public function calcularCosteLimpieza() {
        $tiempoLimpieza = ceil(($this->superficie / 5) * 60);
        $tiempoPlantas = ceil($this->numPlantas * 30);
        $tiempoLimpiezaDia = ($tiempoLimpieza + $tiempoPlantas) / 120;
        $numeroEmpleadosLimpieza = ceil($tiempoLimpiezaDia/8);
        $costeLimpiezaDia = ceil(($tiempoLimpieza + $tiempoPlantas) / 60) * self:: PRECIO_LIMPIEZA_POR_MINUTO;
        $costeLimpiezaMes = $costeLimpiezaDia * 30;
        echo "El coste de limpieza de " . $this->nombre . " es de " . $costeLimpiezaMes . " euros al mes. El tiempo de limpieza empleado al día es de: " . $tiempoLimpiezaDia . " horas para lo cual necesitamos " . $numeroEmpleadosLimpieza . " empleados de limpieza al día" . PHP_EOL;
    }
    abstract function calcularCosteVigilancia();
 }
?>