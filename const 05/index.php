<?php

error_reporting(-1);

define("CONS_1", "VALUE 1");

echo CONS_1;

const CONS_2 = "value 2";

var_dump(CONS_2);

var_dump(get_defined_constants());