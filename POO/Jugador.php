<?php 
//uso self para acceder al objeto, usamos los dos :: y agregamos $al atributo => vea linea 10
class Jugador 
{
    //metodo estático es el que no debo instanciar ni usar objetos para acceder a este recurso o clase
    private static $goles = 5;

    public static function getGoles() //para que sea estático debo invocar la palabra reservada static
    {
        return self::$goles;
    }





}
/* $jugador = new Jugador(); // instanciamos a la clase jugador
echo $jugador->getGoles(); */

    echo Jugador:: getGoles();    //referencio a la clase





?>