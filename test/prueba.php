<?php

include ('class.cajero.php');
include ('class.ventas.php');
include ('class.producto.php');

use PHPUnit\Framework\TestCase;
class StackTest extends TestCase
{
    public function testCajero()
    {
        $cajero = new cajero();
        $respuesta = $cajero->login('maka','123');
        $this->assertTrue($respuesta);
    }

    public function testVentas()
    {
    	$ventas = new ventas();
    	$respuesta = $ventas->listarVentas('12/10/2018','');
    	$this->assertEmpty($respuesta);
    }

    public function testVentasMonto()
    {
    	$ventas = new ventas();
    	$respuesta = $ventas->venta('200');
 	 	$this->assertEmpty($respuesta);
    }

    public function testProductoNuevo()
    {
    	$producto = new producto();
    	$respuesta = $producto->nuevoproducto(1);
    	$this->assertEquals(70,$respuesta);
    }

     public function testProductoNuevo2()
    {
    	$producto = new producto();
    	$respuesta = $producto->nuevoproducto(2);
    	$this->assertEquals(50,$respuesta);
    }

    public function testquitaragregado()
    {
    	$quitaragregado = new producto();
    	$respuesta = $quitaragregado->quitaragregado(1);
    	$this->assertEquals(0,$respuesta);
    }

}
?>