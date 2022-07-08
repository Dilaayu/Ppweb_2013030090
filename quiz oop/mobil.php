<?php 
class mobil{
    public $name;
    public $color;
    public $bbm;
}
$mbl = new mobil;
$mbl -> name = 'Xenia';
$mbl -> color ='Hitam';
$mbl -> bbm = 'bensin';

echo $mbl->name.' '.$mbl -> color.' '.$mbl->bbm;

?>