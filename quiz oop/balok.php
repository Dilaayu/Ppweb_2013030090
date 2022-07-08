<?php
    class volume
    {
        function balok($p, $l, $t)
        {
            $v = $p * $l * $t;
            return $v;
        }

    }
  
    $volume = new volume;
    $p=20;
    $l=10;
    $t=3;
    $hasil = $volume ->balok($p,$l,$t);
    echo"volume ".$hasil;
  
    ?>