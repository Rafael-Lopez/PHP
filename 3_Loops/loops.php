<?php
    $i = 0;

    do {
        echo "<p>$i</p>";
        $i++;
    } while ( $i < 10 );

    while( $i > 0 ) {
        echo "<p>$i</p>";
        $i--;
    }

    for( $i = 0; $i < 10; $i++) {
        echo "<p>$i</p>";
    }

    $colors = array('red', 'blue', 'green', 'yellow');

    for( $i = 0; $i < sizeof($colors); $i++) {
        echo '<p>' . $colors[$i] . '</p>';
    }
?>