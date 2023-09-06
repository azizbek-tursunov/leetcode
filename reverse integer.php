<?php

// https://leetcode.com/problems/reverse-integer/

class Solution {
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse(int $x) {
        $number = abs($x);
        $reversedNumber = 0;
        
        while ($number > 0) {
            $reversedNumber = $reversedNumber * 10 + $number % 10;
            $number = (int)($number / 10);
        }
        
        $reversedNumber *= ($x < 0) ? -1 : 1;
        
        if (-pow(2, 31) <= $reversedNumber && $reversedNumber <= pow(2, 31) - 1) {
            return $reversedNumber;
        }
        
        return 0;
    
    }
}


// $reversedInt = new Solution;
// echo $reversedInt->reverse(321);