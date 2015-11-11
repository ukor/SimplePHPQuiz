<?php
/**
 * Created by PhpStorm.
 * User: Valentine
 * Date: 3/3/14
 * Time: 11:44 AM
 */
//checks if get_magic_qoutes_gpc is set on, if TRUE reurn the string
//if FALSE addslashes and return string*/
function add_slashes($string){
    if(get_magic_quotes_gpc() == 1){
        return $string;
    } else {
        return addslashes(($string));
    }
}

function redirect_to($new_url){
    header("Location: " . $new_url);
    exit;

}
//This function Shuffle the answer(options).
function shuffle_assoc($list) {
    if (!is_array($list)) return $list;

    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key) {
        $random[$key] = $list[$key];
    }
    return $random;
}