<?php

$vls = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

$ait = new ArrayIterator($vls);

while ($nms = $ait->current()) {
    echo $nms;
    $nms->next();
}
