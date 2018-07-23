<?php

function repeatStr($n, $str)
{

    $mystr = "";
    for ($i = 0; $i < $n; $i++) {
        $mystr .= $str;
    }

    echo $mystr;

}

repeatStr(3, "I"); // "IIIIII"





