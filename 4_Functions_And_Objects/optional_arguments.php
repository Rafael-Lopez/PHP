<?php
    function multiplier($a, $multiplier = 2) {
        return $a * $multiplier;
    }

    echo '<p>' . multiplier(2) . '</p>';
    echo '<p>' . multiplier(4, 4) . '</p>';
?>

<?php
    function print_values($a, $b = 2, $c = 'Hello') {
        echo '<p>' . $a . ' ' . $b . ' ' . $c . '</p>';
    }

    print_values('Hey', c: 'there');
    print_values('Hey', c: 'there', b: '!');
?>