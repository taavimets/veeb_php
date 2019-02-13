<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 13.02.2019
 * Time: 14:14
 */
$eesnimi = 'Taavi';
$perenimi = 'Mets';
$vanus = '18';
$kaal = '56';
$sugu = 'mees';

if($sugu == 'mees'){
    echo '<p style="color: blue;">';
} else {
    echo 'p style="color: red;">';
}

echo 'Minu eesnimi on '.$eesnimi.'<br>';
echo 'Minu perenimi on '.$perenimi.'<br>';
echo 'Olen '.$vanus.' aastat vana<br>';
echo 'Kaalun '.$kaal.' kg<br>';
echo '</p>';