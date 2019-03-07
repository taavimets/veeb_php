<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 07.03.2019
 * Time: 10:46
 */
function htmlContent($fn){
    if(file_exists($fn) and is_file($fn) and is_readable($fn)){
        $fp = fopen($fn, 'r');
        $content = fread($fp, filesize($fn));
        fclose($fp);
    } else {
        return false;
    }
    return $content;
}