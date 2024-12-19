<?php
function faktorial($a) {
    if ($a == 0) {
        return 1; // Base case: factorial of 0 is 1
    } else {
        return $a * faktorial($a - 1); // Recursive case
    }
}

echo "Faktorial dari 5 = " . faktorial(5);
?>
