<!--
    You have to search all numbers from inclusive 1 to inclusive a given number x, that have the given digit d in it.
    The value of d will always be 0 - 9.
    The value of x will always be greater than 0.

    You have to return as an array

    the count of these numbers,
    their sum
    and their product.
-->
<?php

function numbersWithDigitInside($x, $d)
{
    $arr = array();
    $k = 0;

    for ($i = 1; $i <= $x; $i++) {
        $i = (string) $i;
        $d = (string) $d;
        // echo strpos($i, $d);
        if (strpos($i, $d) !== false) {
            echo "match";
            array_push($arr, $i);
        }
    }

    if (empty($arr)) {
        return $ans = [0, 0, 0];
    } else {
        $ans[0] = count($arr);
        $ans[1] = array_sum($arr);
        $ans[2] = array_product($arr);

        return $ans;
    }
}

print_r(numbersWithDigitInside(10, 0));
