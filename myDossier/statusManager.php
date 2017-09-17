<?php

function getStatus($age)
{
    if ($age < 18 ){
        $status = "mineur";
    } elseif ($age >= 100 and $age < 120) {
        $status = "presque mort";

    }elseif ($age < 100) {
        $status = "majeur";
    } else {
        $status = "mort";
    }
    return $status;
}
