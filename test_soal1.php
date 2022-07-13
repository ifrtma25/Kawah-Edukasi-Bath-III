<?php 
// 1. Kami mempunyai data array dengan nama variable  data : 

// var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

// - buatlah program FizzBuzz dengan looping: 
//     - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
//     - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
//     - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

foreach ($data as $i) {
    if ($i == 5){
        echo "Fizz";
    } else if ($i == 11){
        echo "Buzz";
    } else if (($i == 5) && ($i == 11)) {
        echo "FizzBuzz";
    }
}

; ?>