<?php

if (!function_exists('dd')) {
    function dd($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        exit;
    }
}


if (!function_exists('require_all')) {
    function require_all($path)
    {
        foreach (glob($path . '*.php') as $filename) {
            require_once $filename;
        }
    }
}

if (!function_exists('isCheckedInput')) {
    function isCheckedInput($value, $arrayVal)
    {
        return in_array($value, $arrayVal);
    }
}
