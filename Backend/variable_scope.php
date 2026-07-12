<?php
//global variable
$a = 10;

function display()
{
     //global variable
    global $c;
    $c=50; 
   echo $c."<br>";
   $b=20; //local variable
//    echo $a; //will cause an error - $a is not accessible inside the function
//    echo $b; //will work - $b is accessible inside the function
}

display();
  echo $c;
?>