<?php
$array  = array(1, "hello", 1, "world", "hello");
$array1 = array("a", "a", "a", "b", "b");
$array2 = array("a", "b", "c", "b", "c");
$array3 = array("a", "a", "a", "a", "a");
print_r(array_count_values($array));
print_r(array_count_values($array1));
print_r(array_count_values($array2));
print_r(array_count_values($array3));
