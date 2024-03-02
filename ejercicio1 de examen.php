<?php
$a = 0; 
$b = 0; 
$num = 0; 

while ($num <= 50) {
    if ($num % 2 == 0) {
        
        $b += $num;
    } else {
        
        $a += $num;
    }

    $num++;
}


echo "La suma de los números impares es: $a<br>";
echo "La suma de los números pares es: $b";
?>
