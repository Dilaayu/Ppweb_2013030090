<?php
     class volume{
          public $phi = 3.14;
                    function bola($r){
               $vol = 4/3*$this->phi*pow($r,3);
               return $vol;
          }
     }
     $vol_bola=new volume;
     $hasil=$vol_bola->bola("15");
     echo $hasil;

?>