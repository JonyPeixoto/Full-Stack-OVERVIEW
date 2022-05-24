<?php

    // Null Coalesce Operator

    //$value = null ?? 'Nothing went right :(';
    //$value = false ?? 'Nothing went right :(';

    // ?: - USING ":" - WE ARE MORE RESTRICT IN THE VALIDATION 

    //$value = false ?: 'Nothing went right :(';
    //$value = null ?: 'Nothing went right :(';
    //$value = null ?: 'Nothing went right :(';
    //$value = true ?: 'Nothing went right :(';
    //$value = '' ?: 'Nothing went right :(';
    //$value = 0 ?: 'Nothing went right :(';
    //$value = $name ?? $test ?? 'Nothing went right :(' ?? 'other thing';

    $real_value = "Hey!";
    $value = $name ?? $test ?? $real_value ?? 'other thing';

    echo $value;

?>