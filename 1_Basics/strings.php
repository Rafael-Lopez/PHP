<?php
    // In PHP, we can use double quotes(") or single quote (') to represent a string.
    // However, there's a slight difference. Strings in double quotes will be processed 
    // by PHP before being outputted.
    $name = "Joe";
    // This prints Hello Joe!
    echo "Hello $name!";

    $name1 = 'Joe';
    // This prints Hello $name1!
    echo 'Hello $name1!';

    // That being said, single quotes are processed faster. Therefore, you want to use 
    // single most of the time. If you need to concatenate when using single quotes,
    // you can use the . operator
    echo 'Hello ' . $name . '!';

    // Double quotes are good when you need escape characters, as they support more special
    // characters than single quotes.
    echo "Joe's nickname was \"Big Joe\"";
    echo "This is in the same line \n";
    echo "This is a new line";
?>