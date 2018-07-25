<?php

/* 
 * 
 *  Your task is correct the errors in the digitised text. You only have to handle the following mistakes:
 *  S is misinterpreted as 5
 *  O is misinterpreted as 0
 *  I is misinterpreted as 1
 * 
 */

/* 
 * 
    fredysante
    function correct($string) {
        $mistakes = ['0', '1', '5'];
        $correct  = ['O', 'I', 'S'];
        return str_replace($mistakes, $correct, $string);
    }

 * 
 */


function correct($string)
{
    // todo
    // compare 比對 符合條件 取代
    return str_replace(array("0","1","5"),array("O","I","S"),$string,$count);
}

echo $count ;
echo correct("L0ND0N");