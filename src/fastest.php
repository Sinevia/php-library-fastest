<?php

namespace Sinevia;

function fastest($options = []) {
    $action = $action = trim(str_replace(['__'], '_', str_replace(['/', ' ', '-'], '_', $_REQUEST['a'] ?? 'home')), '_');
    $outputAsString = isset($options['output_as_string']) ? $options['output_as_string'] : false;
    $function = $action . '_action';
    if (function_exists($function)) {
        if($outputAsString){
            return call_user_func($function);
        }
        die(call_user_func($function));
    } else {
        if($outputAsString){
            return $function . ' not found';
        }
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        die($function . ' not found');
    }
}
