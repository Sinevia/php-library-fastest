<?php

namespace Sinevia;

function fastest($options = []) {
    $optionAction = isset($options['action']) ? $options['action'] : null;
    $optionOutputAsString = isset($options['output_as_string']) ? $options['output_as_string'] : false;
    $action = is_null($optionAction) ? ($_REQUEST['a'] ?? 'home') : $optionAction;
    $actionEscaped = trim(str_replace(['__'], '_', str_replace(['/', ' ', '-'], '_', $action)), '_');
    $function = $actionEscaped . '_action';

    if (function_exists($function)) {
        if ($optionOutputAsString) {
            return call_user_func($function);
        }
        die(call_user_func($function));
    } else {
        if ($optionOutputAsString) {
            return $function . ' not found';
        }
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        die($function . ' not found');
    }
}
