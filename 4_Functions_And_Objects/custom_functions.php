<?php
    function is_palindrome( $string ) {
        $string = strtolower( $string );
        $string = str_replace(' ', '', $string);

        return $string == strrev($string);
    } 

    $test = 'Race car';

    if ( is_palindrome($test) ) {
        echo "'$test' is a palindrome";
    }
?>