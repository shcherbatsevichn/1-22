<?php 
error_reporting(-1);
// Натуральное число N разложить на простые множители.   
$n = 144;
echo ("Число ".$n."<br>");
$rem = $n;
while($rem != 1){
    if(!isjustnumder($rem)){
        for($del = 2; $del <= $rem; $del++){
            if($rem % $del == 0){
                $rem = $rem / $del;
                echo($del."<br>");
                $del--;
                
            }
        }
    }else{
        echo($rem."<br>");
        break;
    }    
}

function isjustnumder($number){
    $counter = 0;
    for ($n = 1; $n <= $number; $n++){
        if ($number % $n == 0){
            $counter++;
        }
    }
    if($counter <= 2){
        return true;
    }else{
        return false;
    }
}