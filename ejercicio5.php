<?php
function fierroAlv() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "pesopluma\n";
        } elseif ($i % 3 == 0) {
            echo "peso\n";
        } elseif ($i % 5 == 0) {
            echo "pluma\n";
        } else {
            echo "$i\n";
        }
    }
}

fierroAlv();
?>