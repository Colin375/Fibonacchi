
<?php
function fibonacci($n) {
    $getal1 = 1;
    $getal2 = 2;

    for ($i = 0; $i < $n; $i++) {
        echo $getal1;

        if ($i < $n - 1) {
            echo ", ";
        }

        $volgende = $getal1 + $getal2;
        $getal1 = $getal2;
        $getal2 = $volgende;
    }
}

$n = (int) readline("Voer een getal in: ");

echo "Fibonacci-reeks: ";
fibonacci($n);

echo PHP_EOL;
?>
