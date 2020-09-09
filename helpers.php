<?php

// Some helper functions which are used globally

namespace App;

// Function to render a view into a variable with added parameters
function render_php($path, $parameters = null)
{
    ob_start();
    include($path);
    $view = ob_get_contents();
    ob_end_clean();
    return $view;
}

// Basic logging helper
function ez_log($str)
{
    if (gettype($str) != 'string') {
        $str = var_export($str, true);
    }
    error_log($str . "\n", 3, '../logs/log.txt');
}

// Basic error logging helper
function ez_error_log($str)
{
    if (gettype($str) != 'string') {
        $str = var_export($str, true);
    }
    error_log($str . "\n", 3, '../logs/error.txt');
}