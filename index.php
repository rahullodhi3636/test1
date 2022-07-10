<?php

class Solution{
    function subsets($nums){
       $all = [[]];
       return $all;
    }
}

$nums[] = [0];

$solution = new Solution();
$output = $solution->subsets($nums);
$new = array_merge($output,$nums);

//commit on first on development branch dddddddd

print_r($new);