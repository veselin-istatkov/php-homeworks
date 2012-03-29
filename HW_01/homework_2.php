<?php

$arr = range(20, 1000, 37);

function is_prime($n) {
    for ($i = 2; $i < sqrt($n); $i++) {
        if ($n % $i == 0)
            return false;
    }
    return true;
}

function find_3_prime() {
    global $arr;
    $count = 0;
    foreach ($arr as $num) {
        if ($count == 3)
            return $num;
        if (is_prime($num))
            $count++;
    }
    return 0;
}

function check_exists() {
    global $arr;
    $numbers = array(146, 284, 871);
    foreach ($numbers as $num) {
        if (in_array($num, $arr, $strict = TRUE))
            $exists = 1;
        if ($exists) {
            echo "The number $num exists in the array.<br>";
        }
        else
            echo "The number $num does not exist in the array.<br>";
    }
}

$prime3 = find_3_prime();
echo "The 3rd prime number in the array is $prime3 <br>";
check_exists();
?>
