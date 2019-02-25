<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 25.02.2019
 * Time: 11:59
 */
foreach ($_GET as $nimetus => $vaartus){
    if(strlen($_GET[$nimetus]) == 0){
        header('Location: index.html');
        exit;
    }
}
foreach ($_GET as $nimetus => $vaartus){
    echo $nimetus.' => '.$vaartus.'<br>';
}
