<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/15/14
 * Time: 1:08 AM
 */

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

//print_r($records);

$first_names = array_column($records, 'first_name','last_name');
//print_r($first_names);

$a = array(5=>'a');
print_r($a);

$a[111] = 'b';
print_r($a);

$a['hello'] = 'Hi';
print_r($a);


$a['fatima'] = 'Hello Fatima';
print_r($a);

$a[3] = 'b';
print_r($a);

$a[] = 'b';
print_r($a);

?>