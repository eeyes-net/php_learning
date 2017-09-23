<?php

define('NUMBER1',  1);
define('NUMBER2',  -2);
define('FLOAT1',  1.23);
define('FLOAT2',  1.2e34);
define('STRING1',  'Hello, ');
define('STRING2',  "world!");

echo NUMBER1, "\n";
echo NUMBER2, "\n";
echo FLOAT1, "\n";
echo FLOAT2, "\n";
echo STRING1;
echo STRING2, "\n";

var_dump(NUMBER1);
var_dump(NUMBER2);
var_dump(FLOAT1);
var_dump(FLOAT2);
var_dump(STRING1);
var_dump(STRING2);