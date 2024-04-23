<?php


function add(int $i, int $j) : int {
    return ($i + $j);
}

function addExperimental(int $i, int $j) : int {
    while($j != 0) {
        $i++;
        $j--;
    }
    return $i;
}

print_r(add(30,50));
print_r("\n");
print_r(addExperimental(30,50));
