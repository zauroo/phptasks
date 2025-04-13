<?php

$is_VIP = false; 
$musterinin_buccesi = 3000; 

if ($is_VIP) { 
    if ($musterinin_buccesi < 5000) {
        echo "Endirim: " . ($musterinin_buccesi * 10 / 100) . " AZN";
    } elseif ($musterinin_buccesi >= 5000 && $musterinin_buccesi <= 10000) {
        echo "Endirim: " . ($musterinin_buccesi * 15 / 100) . " AZN";
    } else {
        echo "Endirim: " . ($musterinin_buccesi * 20 / 100) . " AZN";
    }
} else { // Əgər VIP deyilsə
    if ($musterinin_buccesi < 5000) {
        echo "Endirim: " . ($musterinin_buccesi * 0 / 100) . " AZN";
    } elseif ($musterinin_buccesi >= 5000 && $musterinin_buccesi <= 10000) {
        echo "Endirim: " . ($musterinin_buccesi * 5 / 100) . " AZN";
    } else {
        echo "Endirim: " . ($musterinin_buccesi * 10 / 100) . " AZN";
    }
}


// VIP musteri

// müsterinin VİP olub olmadigini teyin elemeliyik
// 	müsterinin ne qeder buccesi oldugunu teyin elemeliyik
// 	eger müsteri VİP dise
// 		eger bücce 5000 den azdisa 10% endirim = 

// 		diger 5000 le 10000 arasindadisa 15% endirim

// 		diger 10000 den coxdusa 20 % endirim

// 	eger Vip deilse 
// 		eger 5000 den azdisa 0% endirim

// 		diger 5000 le 10000 arasindadisa 5% endirim
 
//  		diger 10000 den coxdusa 10% endirim
