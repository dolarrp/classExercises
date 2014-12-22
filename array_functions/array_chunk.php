<?php

//$b = 'Hi! Dont cry!!!';
//echo $b;

//$a = 'Hi';

$input_array = array('a', 23.44, 'cccc', 'ddddd', 23, 25, '23, 25');

//var_dump($input_array);
//var_dump($a);
//print_r();

//print_r();

//print_r('hello');


print_r($input_array);

$output = array_chunk($input_array, 2, true);

print_r($output);

echo $output[1][0];

print $output[1][2];

//print_r(array_chunk($input_array, 2, true));
/**/
?>
