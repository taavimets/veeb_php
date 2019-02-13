<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 13.02.2019
 * Time: 14:14
 */
$arv = rand(0, 100);

$jaak = $arv % 2;
echo $arv.' - ';
if($jaak == 0) {
    echo 'paaris';
} else {
    echo 'paaritu';
}