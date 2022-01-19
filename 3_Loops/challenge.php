<?php
    $previous = 0;
    $current = 1;
    $limit = 200;

    while( $current < $limit) {
        echo $current . " ";

        $next = $previous + $current;
        $previous = $current;
        $current = $next;
    }
?>