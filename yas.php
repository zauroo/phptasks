<?php
$isdifadecinin_yasi = -1;
$balaca = 7;
$mektelbli = 17;
$telebe = 22;
$boyuk = 59;
$pensia_yasi = 60;

if ($isdifadecinin_yasi < $balaca) {
    echo "Sən hələ balacasan";
} elseif ($isdifadecinin_yasi <= $mektelbli) {
    echo "Sən məktəblisən";
} elseif ($isdifadecinin_yasi <= $telebe) {
    echo "Sən artıq tələbəsən";
} elseif ($isdifadecinin_yasi <= $boyuk) {
    echo "Sən böyüksən";
} elseif ($isdifadecinin_yasi >= $pensia_yasi && $isdifadecinin_yasi <= 120) {
    echo "Sən pensiya yaşındasan";
} else {
    echo "Öl də, day kayfdasan???";
}


// yasa gore tesnifat 
// 	İsdifadecinin Yaşı = 25 
// 		eger isdifadeci yasi 7 kicikdise
// 		netice =  o balacadi

// 		yada 7 ile 17 yas arasidisa 
// 			neticede = mektebli

// 		yada 18 ile 22 yas arasida
// 			netice = onda telebedi

// 		yada 23 ile 59 arasidisa
// 		netice = o boyükdü 

// 		60 dan yuxaridisa 
// 		netice = pensiadadi

// 		yada 120 ni kecibse 
// 		netice = olub  


