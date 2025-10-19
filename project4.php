<?php

// Define an array of integers
$numbers = [10, 25, 90, 15, 60];

// Calculate the sum of array values
$total = array_sum($numbers); //array_sum is a built in php function

echo "<h1>Array Sum Calculator</h1>";
echo "<p>Array values: " . implode(', ', $numbers) . "</p>"; //just listing the numbers out, this line performs no math
echo "<p>Total sum: <strong>$total</strong></p>";

?>