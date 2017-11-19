function fastest($options=[]){
    $action = trim($_REQUEST['a']??'home');
    $function = $action . '_action';
    if (function_exists($function)) {
       die (call_user_func($function));
    } else {
       header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    }
}
