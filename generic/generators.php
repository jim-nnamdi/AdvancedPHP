<?php

function generate_range($min, $max)
{
    for ($i = $min; $i < $max; $i++) {
        yield $i;
    }
}

$g_obj = generate_range(1, 5);
echo $g_obj->current();
$g_obj->next();
echo $g_obj->current();
