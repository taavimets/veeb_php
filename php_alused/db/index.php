<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 07.03.2019
 * Time: 8:44
 */
require_once 'db_conf.php';
require_once 'db_fnc.php';

$connectIKT = dbConnect(HOST, USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = dataQuery($connectIKT, $sql);
echo '<pre>';
print_r($sqlResult);