<?php
    $total = 2;

    switch( $total ) {
        case 1:
            echo '<p>Total is 1</p>';
            break;
        case 2:
            echo '<p>Total is 2</p>';
            break;    
        case 3:
            echo '<p>Total is 3</p>';
            break; 
        default:
            echo '<p>Total is more than 3</p>';          
    }

    $turtle = 'Mike';
    $bandana = '';
    switch( $turtle ) {
        case 'Leo':
            $bandana = 'blue';
            break;
        case 'Ralph':
            $bandana = 'red';
            break;    
        case 'Mike':
            $bandana = 'orange';
            break; 
        case 'Don':
            $bandana = 'purple';
            break;         
    }
    
    echo "<p>$bandana</p>";
?>