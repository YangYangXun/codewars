<?php

// ("LONDON", correct("L0ND0N"));
// ("DUBLIN", correct("DUBL1N"));
// ("SINGAPORE", correct("51NGAP0RE"));
// ("BUDAPEST", correct("BUDAPE5T"));
// ("PARIS", correct("PAR15"));


//  return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);

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