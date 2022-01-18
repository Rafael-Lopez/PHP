<?php
    // Indexable array
    // An array with a number as the index
    $colors = array('red', 'green', 'blue');

    // print entire array
    print_r($colors);
    // print just one element in the next line
    echo '<p>' . $colors[0] . '</p>';
    // add a new element to the array
    $colors[] = 'yellow';
    print_r($colors);

    // Associative array
    // A key-value pair array
    $home_towns = array(
        'Joe' => 'Middletown, NY',
        'Erin' => 'West Chester, PA',
        'Dave' => 'Exton, PA',
        'Brian' => 'Grand Rapids, MI',
    );

    echo '<pre>';
    print_r($home_towns);
    echo '</pre>';

    echo '<p>' . $home_towns['Dave'] . '</p>';

    // Multidimensional array
    $brothers = array(
        'Joe' => array(
            'age' => 29,
            'job' => 'manager',
            'state' => 'FL'
        ),
        'Roy' => array(
            'age' => 30,
            'job' => 'logistics',
            'state' => 'NY'
        ),
    );

    echo '<pre>';
    print_r($brothers);
    echo '</pre>';

    echo '<p>' . $brothers['Joe']['job'] . '</p>';
?>