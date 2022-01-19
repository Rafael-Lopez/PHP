<?php
    $is_logged_in = true;

    if ($is_logged_in) {
        echo '<h3>Welcome back, user!</h3>'; 
    } else {
        echo '<h3>Welcome to the site!</h3>'; 
    }

    $a = 5;
    $b = 8;

    if ($a > $b) {
        echo '<p>$a greater than $b</p>'; 
    } else if ($b > $a) {
        echo '<p>$b greater than $a</p>'; 
    } else {
        echo '<p>$a and $b are equal</p>'; 
    }

    $one = 1;
    $one_str = '1';

    // This is true, because the string '1' is converted into a number
    if ($one == $one_str) {
        echo '<p>This will always print</p>'; 
    }

    // This is false, because when we use === then we check that the value and type are the same
    if ($one === $one_str) {
        echo '<p>Never printed :c</p>'; 
    }
?>