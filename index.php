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

//commit on first on master dddd

print_r($new);