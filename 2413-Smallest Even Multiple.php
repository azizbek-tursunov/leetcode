<?php

// https://leetcode.com/problems/smallest-even-multiple/description/

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