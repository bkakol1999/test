<?php

require "index.php";

// Number of iterations for more accurate timing
$iterations = 10000; // You can adjust this number based on your preference

// Test add() function
$startAdd = microtime(true);
for ($k = 0; $k < $iterations; $k++) {
    add(30, 50);
}
$endAdd = microtime(true);
$timeAdd = ($endAdd - $startAdd) * 1000; // Convert to milliseconds

// Test addExperimental() function
$startExperimental = microtime(true);
for ($k = 0; $k < $iterations; $k++) {
    addExperimental(30, 50);
}
$endExperimental = microtime(true);
$timeExperimental = ($endExperimental - $startExperimental) * 1000; // Convert to milliseconds

// Output the results
echo "add() function took {$timeAdd} milliseconds for {$iterations} iterations\n";
echo "addExperimental() function took {$timeExperimental} milliseconds for {$iterations} iterations\n";

// Determine which function is faster
if ($timeAdd < $timeExperimental) {
    echo "add() function is faster\n";
} else {
    echo "addExperimental() function is faster\n";
}