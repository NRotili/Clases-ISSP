<?php

for ($i = 0; $i <= 50; $i++) {
    if ($i%3 == 0 && $i%5 == 0){
        echo "FIZZBUZZ <br>";
    }elseif ($i % 3 == 0) {
        echo "FIZZ <br>";
    } elseif ($i % 5 == 0) {
        echo "BUZZ <br>";
    } else {
        echo $i . "<br>";
    }
}
