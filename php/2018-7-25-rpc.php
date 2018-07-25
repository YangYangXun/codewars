<?php

/*
 *  rps('scissors','paper') // Player 1 won!
rps('scissors','rock') // Player 2 won!
rps('paper','paper') // Draw!
 */

function rpc($p1, $p2)
{
    #you code here
    if (!empty($p1) && !empty($p2)) {

        if ($p1 == $p2) {
            return "Draw!";
        } else {

            switch ($p1) {
                case 'scissors':
                    if ($p2 == 'paper') {return "Player 1 won!";} else {return "Player 2 won!";}
                    break;
                case 'rock':
                    if ($p2 == 'scissors') {return "Player 1 won!";} else {return "Player 2 won!";}
                    break;
                case 'paper':
                    if ($p2 == 'rock') {return "Player 1 won!";} else {return "Player 2 won!";}
                    break;
            }
        }
    }

}
