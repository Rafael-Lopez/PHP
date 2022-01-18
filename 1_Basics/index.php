<?php 
// Single line comment
    echo 'Hello World';
?>    

<?='Hello World'?>

<?php
    /* We prefer to use echo
       print is a little slower 
    */
    print 'Hello World'
?>

<?php
    $age = 34;
    $hello_message = "Hello there!";
    $just_a_boolean = true;
    // Define a constant
    define("PI", 3.1416);

    // This will not work
    // PI = 7;

    echo $age;
    echo $hello_message;
    echo $just_a_boolean;
    echo PI;
?>