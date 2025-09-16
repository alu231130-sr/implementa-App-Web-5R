<?php
//Aplicacion para imprimir nombres de amigos
//Creado por Alison Janice Saldaña Vargas
//Fecha: 15/Septiembre/2025
//AppWeb4.php
class mensaje 
{
    public $mensaje1="Bienvenidos a App Web";
    public $mensaje2="Oscar";
    public $mensaje3="Scarlett";
    public $mensaje4="Alex";
    public $mensaje5="Areli";
    public $mensaje6="Hannia";

    public function imprimir_mensaje()
    {
        print "<h1>$this->mensaje1</h1>";
        print "<h1>$this->mensaje2</h1>";
        print "<h1>$this->mensaje3</h1>";
        print "<h1>$this->mensaje4</h1>";
        print "<h1>$this->mensaje5</h1>";
        print "<h1>$this->mensaje6</h1>";
    }
}
$obj1=new mensaje;  //se crea el objeto de tipo de mensaje
$obj1->imprimir_mensaje();
?>