<?php

namespace App;

function render_php($path, $parameters = null)
{
    ob_start();
    include($path);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}

function ez_log($str)
{
    if (gettype($str) != 'string') {
        $str = var_export($str, true);
    }
    error_log($str, 3, '../logs/log.txt');
    error_log("\n", 3, '../logs/log.txt');
}