<?php
include_once 'class/BubbleSort.php';
$array = [-3, 100, 23.5, 4, 2, 7, 8, 1, 3, 5, 9, 0, 6, 12];

//Making new Object
$sorter = new BubbleSort();

// Let's sort array with non-recursive method
$simple = $sorter->simple_bubble_sort($array);

echo 'Simple: '.implode($simple, ",");

echo '<br />';

// and now let's sort array with recursive method.
$recursive = $sorter->recursive_bubble_sort($array);

echo 'Recursive: '.implode($recursive, ",");
