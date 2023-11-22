<?php

namespace App\Solution;

// BEGIN (write your solution here)
$text = 'Пацаны запомните однажды Роналдо сказал: SIIIIIIIIIIIIIII'
function truncate()
{
    $w = substr($text, 0, -30);
    $ew = $w . '...';
    return $ew;

}
// END