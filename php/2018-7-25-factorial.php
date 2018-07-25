<?php

function factorial(int $n): int
{
    // Your code here
    $ans = 1;

    if ($n < 0 || $n > 12) {
        throw new RangeException();
    } else {
        for ($i = $n; $i > 0; $i--) {
            $ans = $ans * $i;
        }
    }

    return $ans;

}
