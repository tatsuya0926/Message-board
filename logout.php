<?php
session_start();

// ini_set('display_errors', "On");

$_SESSION = array();
if(ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name() . '', time() - 42000,
    array(
        'path' => $params['path'],
        'domain' => $params['domain'],
        'secure' => $params['secure'],
        'httponly' => $params['httponly']
    ));
}
session_destroy();
 
setcookie('email', '', time() - 3600);
 
header('Location: login.php');
exit();
?>