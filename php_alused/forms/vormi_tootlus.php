<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 25.02.2019
 * Time: 11:59
 */
extract($_GET);
$nimi = $_GET['nimi'];
$parool = $_GET['parool'];

echo 'Tere'.$nimi.'!<br>';
echo 'sinu parool on '.$parool;