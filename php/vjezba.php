<?php

$a = array(

    'a'=>'A',
    0=>'a',
    'b'=>'B',
    1=>'b',
    'c'=>'C',
    2=>'c',
    'd'=>'D',
    3=>'d',
    'e'=>'E',
    5=>'e',
    4=>5
);

krsort($a);

print_r($a);