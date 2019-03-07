<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 07.03.2019
 * Time: 11:36
 */
session_start();
if(isset($_SESSION['user'])){
    session_unset();
    session_destroy();
    header('Location: index.php');
}