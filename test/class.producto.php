<?php
  /**
   *
   */
  class producto
  {

    public function nuevoproducto($cod_producto)
    {
      if ($cod_producto==1){
        echo 'hamburguesa con tomate y lechuga <br>';
        return 70;
      }
      else {
        echo 'gaseosa <br>';
        return 50;
      }
    }

    public function quitaragregado($cod_agregado)
    {
       if($cod_agregado==1){
        echo 'sin lechuga<br>';
        return 0;
      }

      if($cod_agregado==2){
        echo 'sin tomate<br>';
        return 0;
      }

    }

    public function sumaragregado($cod_agregado)
    {
      if($cod_agregado==1){
        echo 'agregado de papa frita <br>';
        return 50;
      }

      if($cod_agregado==2){
        echo 'agregado de mayonesa <br>';
        return 50;
      }

      if($cod_agregado==3){
        echo 'agregado de mostaza <br>';
        return 50;
      }

      if($cod_agregado==4){
        echo 'agregado de jamon y queso <br>';
        return 50;
      }

      if($cod_agregado==5){
        echo 'agregado de huevo <br>';
        return 50;
      }

      if($cod_agregado==0){
        echo 'sin agregado <br>';
        return 50;
      }
    }

  }

 ?>
