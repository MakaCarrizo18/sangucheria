<?php
  /**
   *
   */
  class Ventas
  {
      public function listarventas($fecha,$total)
      {
        echo $fecha;
        echo 'el total'.$total;
        return $total;
      }

      public function venta($monto)
      {
        //conexion con afip 
        echo '<br> deberia conectarse con AFIP';
        echo 'el monto pasado es:'.$monto;
      }
  }

 ?>
