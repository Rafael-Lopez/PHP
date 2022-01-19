<?php
    $min = 1;
    $max = 50;
    $guess = 16; //Change this value to test
    $num = rand($min, $max); //Change this value to test

    if( $guess < $min || $guess > $max) {
        echo 'Guess out of range: ' . $guess;
    } else if ($guess < $num) {
        echo 'Guess is too low';
    } else if ($guess > $num) {
        echo 'Guess is too high';
    } else {
        echo 'Your guess is correct!';
    }
?>