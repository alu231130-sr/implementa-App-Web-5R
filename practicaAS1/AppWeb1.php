<?php
//Aplicacion para imprimir mensaje de bienvenida
//Creado por Alison Janice Saldaña Vargas
//Fecha: 10/Septiembre/2025
//AppWeb1.php
class mensaje 
{
    public $mensaje1="Bienvenidos a App Web";
    public $mensaje2="Alison Janice Saldaña Vargas";
    public function imprimir_mensaje()
    {
        print "<h1>$this->mensaje1</h1>";
        print "<h1>$this->mensaje2</h1>";
    }
}
$obj1=new mensaje;  //se crea el objeto de tipo de mensaje
$obj1->imprimir_mensaje();
?>
