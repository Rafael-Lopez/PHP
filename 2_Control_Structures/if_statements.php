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

    // Ternary operator
    $message = $is_logged_in ? '<h3>Welcome back, user!</h3>' : '<h3>Welcome to the site!</h3>'; 
    echo $message;

    $message = "<h3>Welcome" . ($is_logged_in ? '!' : 'back!') . "</h3>"; 
    echo $message;

    // isset: returns a boolean indicating whether a variable exists or not
    echo isset($name) ? $name : 'Joe';

    // elvis operator: if $name is null, then use the backup value. Notice the $name variable must exist. Otherwise, there's an error.
    $name = 'Alice';
    //$name = null;
    $name = $name ?: 'Joe';
    echo $name;
?>