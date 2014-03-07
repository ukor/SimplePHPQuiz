<?php
/**
 * Created by PhpStorm.
 * User: Valentine
 * Date: 3/3/14
 * Time: 11:44 AM
 */

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