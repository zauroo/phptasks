<?php

$qiymet = 30000;  
$bazar = "Rusiya";  


$yekun_qiymet = $qiymet;

if ($bazar == "Azerbaycan") {
    $yekun_qiymet += $qiymet * 20 / 100;  
} elseif ($bazar == "Rusiya") {
    $yekun_qiymet += $qiymet * 30 / 100; 
} elseif ($bazar == "Amerika") {
    $yekun_qiymet += 5000;   
}

echo "Netice: " . $yekun_qiymet . " AZN";

// Maşin Gömrük app
// 	Maşinin qiymeti:30000 Azn
// 	Hansi Bazara Aid oldugu:
// 		Eger Masin Azerbaycan Bazarina Aitside
// 			Netice = 30000 % 20 * 100
// 		Eger Masin Rusia Bazarina Aitdise
// 			Netice = 30000 % 30 * 100
// 		Yada Masin Amerikan Bazarina aitdise 
// 			Netice = 30000 + 5000 


