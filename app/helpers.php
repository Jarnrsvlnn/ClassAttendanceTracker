<?php

function formatDate(string $date): string
{
    $date = date('M d, Y', strtotime($date));

    return $date;
}
