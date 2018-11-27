<?php
 /**
  *
  */
 class cajero
 {
    function login($nombre, $pass)
    {
      $nom_cajero="maka";
      $pass_cajero="123";
        if($nombre==$nom_cajero and $pass==$pass_cajero)
          return true;
        else {
          return false;
        }
    }
 }
 ?>
