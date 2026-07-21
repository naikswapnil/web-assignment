<?php

//Global Variable
$a = 10;

function display()
{
    //global variable
    global $c;
    $c = 50;
    echo $c."<br>";
    $b = 20;//local Variable
    //echo $a;//will cause  an error - $a is not accessible the function;
    //echo $b;//will work - $b is accessible function
}

display();
echo $c;

?>