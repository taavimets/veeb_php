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

switch ($sugu) {
    case 'mees':
        echo '<p style="color: blue">';
        break;
    case 'naine':
        echo '<p style="color: red">';
        break;
    default:
        echo '<p style="color: green">';
        break;

}

echo 'Minu eesnimi on '.$eesnimi.'<br>';
echo 'Minu perenimi on '.$perenimi.'<br>';
echo 'Olen '.$vanus.' aastat vana<br>';
echo 'Kaalun '.$kaal.' kg<br>';
echo '</p>';