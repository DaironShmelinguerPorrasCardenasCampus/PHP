<?php
class Camper  // la clase se pone la primera en Mayúscula
{
    //1. se necesita definir los atributos(variables) con modoficadores de acceso en private
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

    //3. métodos (getters =>  obtiene valores de atributos AND setters => modifican, setean valores de atributos - propiedades)
        //MÉTODOS GETTERS
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

        //metodos con parametros

        public function getSaludo()
        {
            return $saludo. "campus";
        }

        //MÉTODOS SETTER
        public function setNombre($nombre) //parametro = variable nombre
        {
            $this-> nombre = $nombre ;
        }
        public function setEmail($email) //parametro = variable nombre
        {
            $this-> email = $email ;
        }
        public function setCelular($celular) //parametro = variable nombre
        {
            $this-> celular= $celular ;
        }
}

        // INstanciar clases => variables de instancias 
        $camper = new Camper("Dairon", "porras.n123456789@gmail.com","3202975259"); //paso los argumentos

        //setter
        $camper->setNombre("Shmelinguer")."<br>";
        $camper->setEmail("daposhme.email.com")."<br>";
        $camper->setCelular("3212316461")."<br>";

        //getter
        echo $camper->getNombre() ."<br>";
        echo $camper->getEmail()."<br>";
        echo $camper->getCelular()."<br>";
        echo $camper->getSaludo("hello :)");
?>