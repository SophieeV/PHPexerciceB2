<?php 

function multiplication(){
    $number1 = rand(1, 100);
    for($number2=1;$number2<21;$number2++)
    echo " le resultat de la multiplication de ".$number2." * ".$number1." est <br>".$number2*$number1."<br><br>";
   // return $a*$v;

}
    
  echo multiplication();



?>