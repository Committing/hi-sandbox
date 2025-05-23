<?php




define('ROOT', rtrim($_SERVER['DOCUMENT_ROOT'], '/'));



define('F', false);
define('T', true);
define('f', false);
define('t', true);




switch ($_SERVER['HTTP_HOST']) {

    case 'hi-sandbox.com.test':
        define('LOCAL', true);
        break;

    default:
        define('LOCAL', false);
        break;

}



if (LOCAL !== true) {
    // disabled errors
    error_reporting(0);
    ini_set('display_errors', 0);
}