<?php
/**
 * Created by PhpStorm.
 * User: mikedemick
 * Date: 8/20/16
 * Time: 3:51 PM
 */

//if ((strpos($_SERVER['SERVER_NAME'], 'www') == false) ) {
//  echo 'false';
//}else{
//echo 'true';
//}

//if($_SERVER['SERVER_NAME']); //HTTPS

//echo $_SERVER['HTTPS']; // On

//if( $_SERVER['HTTPS'] !== 'On'){
//echo 'no ssl';
//}else{
//echo 'has ssl';
//}

//if (!strpos($_SERVER['SERVER_NAME'], 'www') ) {
//echo 'no www';
//}else{
//echo 'has www';
//}

$a = $_SERVER['SERVER_NAME'];

//if (strpos($a, 'www') ==false) {
//  echo 'true';
//}

echo strpos($a, 'www');


$a = $_SERVER['SERVER_NAME'];
if(strpos($a, 'playgfc') !== false){
    if((strpos($a, 'www') === false) || ($_SERVER['HTTPS'] !== 'On')){
        return true;
    }else
    {
        return false;
    }
}else{
    return false;
}


$url =  'https://www.playgfc.com' . $_SERVER['REQUEST_URI'];
drupal_goto($url);
