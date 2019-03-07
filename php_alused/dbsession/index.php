<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 07.03.2019
 * Time: 8:44
 */
session_start();

require_once 'db/db_conf.php';
require_once 'db/db_fnc.php';
require_once 'library/fnc.php';

if(!isset($_SESSION['user'])){
    echo htmlContent('html/form.html');
} else {
    echo htmlContent('html/page1.html');
    echo htmlContent('html/logout.html');
}