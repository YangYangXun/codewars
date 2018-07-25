<?php

/*
 * $this->assertEquals(5, findIt([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]));
$this->assertEquals(-1, findIt([1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5]));
$this->assertEquals(5, findIt([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]));
$this->assertEquals(10, findIt([10]));
$this->assertEquals(10, findIt([1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1]));

 */

function findIt(array $seq)
{
    // Enter your code here
    $arr = array();

    for ($i = 0; $i < count($seq); $i++) {
        # code...
        $arr[$seq[$i]]++;
    }

    foreach ($arr as $num => $value) {
        # code...
        if (!($value % 2 === 0)) {
            return $num;
        }
    }

}

findIt([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]);
