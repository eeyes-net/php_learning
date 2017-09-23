<?php

echo f(2), "\n";
echo f2(2), "\n";

$x = 3;
echo f($x), "\n";
echo f2($x), "\n";

$x = 4;
echo f($x), "\n";
echo f2($x), "\n";

define('X', 5);
echo f(X), "\n";
echo f2(X), "\n";


function f($x)
{
    return $x * $x;
}

function f2($x)
{
    return 1 / $x ;
}