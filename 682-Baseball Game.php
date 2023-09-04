<?php

// https://leetcode.com/problems/baseball-game/description/

class Solution
{

    /**
     * @param String[] $operations
     * @return Integer
     */
    function calPoints($operations)
    {
        $s = [];
        foreach ($operations as $operation) {
            if ($operation == 'C') {
                array_pop($s);
            } elseif ($operation == 'D') {
                array_push($s, end($s) * 2);
            } elseif ($operation == '+') {
                array_push($s, (end($s) + $s[count($s) - 2]));
            } else {
                array_push($s, $operation);
            }

        }

        return array_sum($s);
    }
}

//$operations = new Solution();
//echo $operations->calPoints(["5","2","C","D","+"]); // 30