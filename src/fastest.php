<?php

namespace Sinevia;

function fastest($options = []) {
    $action = trim(str_replace(['__'],'_',str_replace(['/',' ','-'],'_',$_REQUEST['a'] ?? 'home')),'_');
    $function = $action . '_action';
    if (function_exists($function)) {
        die(call_user_func($function));
    } else {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        die($function . ' not found');
    }
}
