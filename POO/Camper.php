<?php
class Camper  // la clase se pone la primera en Mayúscula
{
    //1. se neceta definir los atributos(variables) con modoficadores de acceso en private
        private $nombre ;
        private $email ;
        private $celular ;

    //2. constructor método constructor-mágico
    // alternativamente puedo iniciaklizar con valores parametrizados al constructor

        public function __construct($nombre,$email,$celular) //parametros del constructor , es importante saber que son parametros no las variables
        {
            $this->nombre = $nombre;
            $this->email = $email;
            $this->celular = $celular;
        }

    //3. métodos (getters => se obtiene valores de atributos and setters => se modifican, setean valores de atributos - propiedades)
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getCelular()
        {
            return $this->celular;
        }
}

// INstanciar clases => variables de instancias 
        $camper = new Camper("Dairon", "porras.n123456789@gmail.com","3202975259"); //paso los argumentos
        echo $camper->getNombre() ."<br>";
        echo $camper->getEmail()."<br>";
        echo $camper->getCelular()."<br>";
?>