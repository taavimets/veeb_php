<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 07.03.2019
 * Time: 11:10
 */
require_once 'db/db_conf.php';
require_once 'db/db_fnc.php';

$user = $_GET['user'];
$pass = $_GET['pass'];

$connectIKT = dbConnect(HOST, USER, PASS, DB);
$sql = 'SELECT * FROM user WHERE username="'.$user.'" AND password="'.md5($pass).'"';
$userData = dataQuery($connectIKT, $sql);
if($userData != false){
    echo 'kasutaja on olemas';
} else {
    echo 'kasutaja pole olemas';
}