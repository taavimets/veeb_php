<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 07.03.2019
 * Time: 8:44
 */
require_once 'db_conf.php';

function dbConnect($h, $u, $p, $db){
    $connect = mysqli_connect($h, $u, $p, $db);
    if($connect == false){
        echo 'Probleem andmebaasi ühendamisega<br>';
        exit;
    }
    return $connect;
}

$connectIKT = dbConnect(HOST, USER, PASS, DB);