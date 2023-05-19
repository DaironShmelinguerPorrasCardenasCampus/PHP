<?php
//abstract me define a la clase como clase abstracta
//la herencia se recomiedna la clase padre definrila como clase abstracta => las hijas pueden referenciar - las clases abstractas no se pueden instanciar, se pueden heredar
   abstract class Banco 
    {
        public $nombre = "BanColombia";

        public function getNombre()
        
        {
            return $this->nombre;

        }
    
    
    }
    /* $banco = new Banco();
    echo $banco->getNombre(); */

    //clase hija

    class Sucursal extends Banco //herencia de clase padre con extends
    {
        public $direccion= "ZONA FRANCA CL # 7 -25";

        public function getDireccion()
        
        {
            return $this->direccion;

        }

    }
    $sucursal = new Sucursal(); //instanciar clase hija
    echo $sucursal->getNombre(). "<br>";
    echo $sucursal->getDireccion();

?>