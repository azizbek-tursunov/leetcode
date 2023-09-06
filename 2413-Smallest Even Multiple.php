<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n) {
        while ($n % 2 != 0)
            return $n * 2;

        return $n;
        
    }
}

// $solution = new Solution();
// echo $solution->smallestEvenMultiple(5);