<?php

$text = 'Пацаны запомните однажды Роналдо сказал: SIIIIIIIIIIIIIII';

function truncate($text)
{
    $w = substr($text, 0, 7);
    $ew = $w . '...';
    return $ew;
}

echo truncate($text);