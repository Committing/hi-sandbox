<?php






function rgbToHex($r, $g, $b) {
    return '#' . str_pad(dechex($r), 2, '0', STR_PAD_LEFT) . 
               str_pad(dechex($g), 2, '0', STR_PAD_LEFT) . 
               str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
}



function pr($string, $return = false, $bg = 'transparent') {

    $str = '';

    $str .= '<pre style="background-color: ' . $bg . ';">';
    $str .= print_r($string, true);
    $str .= '</pre>';

    $d = debug_backtrace();

    $str .= $d[0]['file'] . '<br />Line: <b>' . $d[0]['line'] . '</b>';

    $str .= '<hr />';

    if ($return === false){
        echo $str;
    } else {
        return $str;
    }

}