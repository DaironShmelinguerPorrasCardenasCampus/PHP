<?php
 //CLASE PADRE DE TRUE
class Empresa 
{
    protected $nombre ; 
    protected $ubicacion;
    protected $direccion;
    protected $telefono;

    public function __construct($nombre,$ubicacion,$direccion,$telefono)
    {
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->direcion = $direccion;
        $this->telefono = $telefono;
       
    }

    public function mostraInformacion()
    {
        echo "Nombre: ". $this->nombre . "<br>Ubicacion: " . $this->ubicacion . "<br>Dirección: " .$this->direccion . "<br>Telefono: " .$this->telefono;
    }
}

//HIJAS

    class  AireLibre extends Empresa{
        protected $nombre_col1 ;
        protected $producto1;
        protected $precio1;

        public function __construct($nombre,$ubicacion,$direccion,$telefono,$nombre_col1,$producto1,$precio1)
        
        {
        parent::__construct($nombre,$ubicacion,$direccion,$telefono);
        $this->nombre_col1 = $nombre_col1;
        $this->producto1 = $producto1;
        $this->precio1 = $precio1;
        }
    }

    class BeachWear extends Empresa
    {
        protected $nombre_col2 ;
        protected $producto2;
        protected $precio2;

        public function __construct($nombre,$ubicacion,$direccion,$telefono,$nombre_col2,$producto2,$precio2)
        {
            parent::__construct($nombre,$ubicacion,$direccion,$telefono);
            $this->nombre_col2 = $nombre_col2;
            $this->producto2 = $producto2;
            $this->precio2 = $precio2;
        }
    }

    class Clasics2_0 extends Empresa
    {
        protected $nombre_col3 ;
        protected $producto3;
        protected $precio3;

        public function __construct($nombre,$ubicacion,$direccion,$telefono,$nombre_col3,$producto3,$precio3)
        {
            parent::__construct($nombre,$ubicacion,$direccion,$telefono);
            $this->nombre_col3 = $nombre_col3;
            $this->producto3 = $producto3;
            $this->precio3 = $precio3;
        }
    }

    class Senses extends Empresa
    {
        protected $nombre_col4 ;
        protected $producto4;
        protected $precio4;

        public function __construct($nombre,$ubicacion,$direccion,$telefono,$nombre_col4,$producto4,$precio4)
        {
            parent::__construct($nombre,$ubicacion,$direccion,$telefono);
            $this->nombre_col4 = $nombre_col4;
            $this->producto4 = $producto4;
            $this->precio4 = $precio4;
        }
    }

    class PLaywear extends Empresa
    {
        protected $nombre_col5 ;
        protected $producto5;
        protected $precio5;

        public function __construct($nombre,$ubicacion,$direccion,$telefono,$nombre_col5,$producto5,$precio5)
        {
            parent::__construct($nombre,$ubicacion,$direccion,$telefono);
            $this->nombre_col5 = $nombre_col5;
            $this->producto5 = $producto5;
            $this->precio5 = $precio5;
        }
    }

    class Blurred extends Empresa
    {
        protected $nombre_col6 ;
        protected $producto6;
        protected $precio6;

        public function __construct($nombre,$ubicacion,$direccion,$telefono,$nombre_col6,$producto6,$precio6)
        {
            parent::__construct($nombre,$ubicacion,$direccion,$telefono);
            $this->nombre_col6 = $nombre_col6;
            $this->producto6 = $producto6;
            $this->precio6 = $precio6;
        }
    }

    $airelibre = new Airelibre("TRUE", "Medellín", "Calle 10 # 36 - 14 : Poblado", 3202975259 , "Aire libre" , " Corduroy Jacket - Ivory" , 470.000);
    $beachwear = new BeachWear("TRUE", "Medellín", "Calle 10 # 36 - 14 : Poblado", 3202975259 , "BeachWear" , " Cheetah Bikini Top - Sand" , 170.000);
    $clasics= new Clasics2_0("TRUE", "Medellín", "Calle 10 # 36 - 14 : Poblado", 3202975259 , "Clasics2_0" , " Classic Premium Hoodie 2.0 - Ivory" , 70.000);
    $senses= new Senses("TRUE", "Medellín", "Calle 10 # 36 - 14 : Poblado", 3202975259 , "Senses" , " Senses Asymmetric Bodysuit - Black" , 230.000);
    $playwear= new PLaywear("TRUE", "Medellín", "Calle 10 # 36 - 14 : Poblado", 3202975259 , "PLaywear" , " Playwear Active Shorts - Black" , 120.000);
    $blurred= new Blurred("TRUE", "Medellín", "Calle 10 # 36 - 14 : Poblado", 3202975259 , "Blurred(" , " Blurred Blocks Hoodie - Copper" , 350.000);

    $airelibre->mostrarInformacion(); 
    echo "<br>";
    echo "<br>";
    $beachwear->mostrarInformacion();
    echo "<br>";
    echo "<br>";
    $clasics->mostrarInformacion();
    echo "<br>";
    echo "<br>";
    $senses->mostrarInformacion();
    echo "<br>";
    echo "<br>";
    $playwear->mostrarInformacion();
    echo "<br>";
    echo "<br>";
    $blurred->mostrarInformacion();
    echo "<br>";
    echo "<br>";
?>