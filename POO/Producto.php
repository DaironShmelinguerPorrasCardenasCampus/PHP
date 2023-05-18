<?php
class Producto
{
    //ATRIBUTOS

    private $nombre;
    private $precio;
    private $id;
    private $referencia;
    private $tipo_producto;
    private $made;
    private $cantidad;

    //cosntructor
    public function __construct($nombre,$precio,$id,$referencia,$tipo_producto,$made,$cantidad)
    {
        $this-> nombre = $nombre;
        $this-> precio = $precio;
        $this-> id = $id;
        $this-> referencia = $referencia;
        $this-> tipo = $tipo_producto;
        $this-> made = $made;
        $this-> cantidad = $cantidad;
    }

    //getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getReferencia(){
        return $this->referencia;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function getMade(){
        return $this->made;
    }
    
    public function getCantidad(){
        return $this->cantidad;
    }
    //setter
    public function setNombre($nombre)
    {
      return  $this-> nombre = $nombre;
    }
    public function setPrecio($precio)
    {
        return  $this-> precio = $precio;
    }
    public function setId($id)
    {
        return  $this-> id = $id;
    }
    public function setReferencia($referencia)
    {
        return $this-> referencia = $referencia;
    }
    public function setTipo($tipo_producto)
    {
        return $this-> tipo = $tipo_producto;
    }
    public function setMade($made)
    {
        return $this-> made = $made;
    }
    public function setCantidad($cantidad)
    {
        return $this-> cantidad = $cantidad;
    }
    
}

$producto = new Producto("Huevos Kikes", "$15.200" , "15" , "15152635" , "Canasta Familiar" , "Bucaramanga" , "26 unidades");
$producto2 = new Producto("Leche Ligth", "$5.000" , "16" , "582858" , "Canasta Familiar" , "Cúcuta" , "16 unidades");
//setters

echo $producto->setNombre("Huevos criollos")."<br>";
echo $producto->setPrecio("12.100")."<br>";
echo $producto->setId("25")."<br>";
echo $producto->setReferencia("1515151")."<br>";
echo $producto->setTipo("Canasta Urbana")."<br>";
echo $producto->setMade("Charalá")."<br>";
echo $producto->setCantidad("30 unidades")."<br>";


echo $producto2->setNombre("Leche")."<br>";
echo $producto2->setPrecio("3.200")."<br>";
echo $producto2->setId("25")."<br>";
echo $producto2->setReferencia("159515")."<br>";
echo $producto2->setTipo("Canasta Urbana")."<br>";
echo $producto2->setMade("Parámo")."<br>";
echo $producto2->setCantidad("150 unidades")."<br>";

//getters




?>