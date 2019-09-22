<?php

interface Bubble
{
  public function simple_bubble_sort(array $array);
  public function recursive_bubble_sort(array $array);
}

class BubbleSort implements Bubble
{
    /**
     * @param array $array
     * @return array
     */
    public function simple_bubble_sort(array $array):array
    {
        // Let's make non-recursive bubble sort.
        $arr_length = count($array); // define total of array elements
        // For non-recursive solution we need to make original sorting in full. O(n2)  So we multiply turns to maximum.
        // It is not a good solution.
        for($q=0; $q<$arr_length;$q++) {
            for ($i=0; $i<$arr_length; $i++) {
                $current = $array[$i];
                if($i+1 < $arr_length) {
                    if($current > $array[$i+1]) {
                        $array[$i] = $array[$i+1];
                        $array[$i+1] = $current;
                    }
                }
            }
        }
        return $array;
    }

    /**
     * @param array $array
     * @return array
     */
    public function recursive_bubble_sort(array $array):array
    {
        $array_length = count($array);
        $iteration_stop = true;
        // Iteration sorting is better.
        // What we do, is check all elements of array again and again.
        // But we have special variable $iteration_stop
        // If $iteration_stop is true, it means all elements of array are in correct order.
        for ($i=0; $i<$array_length-1; $i++) {
            if ($array[$i] > $array[$i+1]) { // case when first element bigger than next one
                $current = $array[$i]; // helping variable.
                $array[$i] = $array[$i+1];
                $array[$i+1] = $current;
                $iteration_stop = false; // we say that there are not sorted elements in array.
            }
        }
        // Now we decide if we need to go deeper or we can send current array back.
        return $new_array = $iteration_stop ? $array : self::recursive_bubble_sort($array);
    }
}