<?php
function is_prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($num = 1; $num <= 20; $num++) {
    if ($num % 2 == 0) {
        echo "Angka $num adalah bilangan genap";
    } else {
        echo "Angka $num adalah bilangan ganjil";
    }

    if (is_prime($num)) {
        echo " sekaligus bilangan prima";
    }

    echo "<br>";
}
?>
