<?php

$a = 500;

function display()
{
    global $c;
    $c=50;
   
    
    echo $c;
     $b = 100;
}
display();
echo $c;


