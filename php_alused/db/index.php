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

function query($conn, $sql){
    $result = mysqli_query($conn, $sql);
    if($result == false){
        echo 'Probleem päringuga: <b>'.$sql.'</b><br>';
        echo mysqli_error($conn).'<br>';
        echo mysqli_errno($conn).'<br>';
    }
    return $result;
}

$connectIKT = dbConnect(HOST, USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = query($connectIKT, $sql);