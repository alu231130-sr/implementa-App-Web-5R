<?php
//Aplicacion para imprimir las habilidades al programar
//Creado por Alison Janice Saldaña Vargas
//Fecha: 15/Septiembre/2025
//AppWeb3.php
class mensaje 
{
    public $mensaje1="Bienvenidos a App Web";
    public $mensaje2="10 Habilidades que se consiguen al programar";
    public $mensaje3="Pensamiento lógico: La programación requiere descomponer problemas complejos en pasos lógicos y secuenciales para su resolución. ";
    public $mensaje4="Análisis de problemas: Se aprende a abordar los problemas de manera estructurada, buscando la forma más eficiente de solucionarlos. ";
    public $mensaje5="Atención al detalle: La minuciosa corrección de errores ("debugging") y la escritura de código demandan una gran precisión y cuidado en los detalles. ";
    public $mensaje6="Aptitud matemática: Se refuerza la habilidad para manejar estructuras de datos, algoritmos y conceptos matemáticos. Lenguajes de programación: Se adquiere el conocimiento de diversos lenguajes y herramientas (como React, Node.js, AWS) para crear software. ";
    public $mensaje7="Dominio de marcos y bibliotecas: Se aprende a utilizar estructuras de desarrollo (frameworks) y herramientas para facilitar la creación de aplicaciones.";
    public $mensaje8="Ciberseguridad: Se desarrolla la capacidad para proteger sistemas y datos, anticipando y mitigando amenazas. ";
    public $mensaje9="Comunicación: Es vital para coordinar el trabajo en equipo, comprender las necesidades de los usuarios y presentar ideas de manera clara. ";
    public $mensaje10="Gestión del tiempo: La planificación y organización de tareas se vuelve fundamental para cumplir con los plazos de los proyectos. ";
    public $mensaje11="Resiliencia: La experiencia de enfrentar errores y "fracasos" en el código enseña a recuperarse y persistir hasta encontrar la solución. ";
    public $mensaje12="Aprendizaje continuo: Dada la constante evolución de la tecnología, la programación impulsa la necesidad de aprender y adaptarse a nuevas herramientas y lenguajes. ";

    public function imprimir_mensaje()
    {
        print "<h1>$this->mensaje1</h1>";
        print "<h1>$this->mensaje2</h1>";
        print "<h1>$this->mensaje3</h1>";
        print "<h1>$this->mensaje4</h1>";
        print "<h1>$this->mensaje5</h1>";
        print "<h1>$this->mensaje6</h1>";
        print "<h1>$this->mensaje7</h1>";
        print "<h1>$this->mensaje8</h1>";
        print "<h1>$this->mensaje9</h1>";
        print "<h1>$this->mensaje10</h1>";
        print "<h1>$this->mensaje11</h1>";
        print "<h1>$this->mensaje12</h1>";
        
    }
}
$obj1=new mensaje;  //se crea el objeto de tipo de mensaje
$obj1->imprimir_mensaje();
?>