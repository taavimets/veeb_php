<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 25.02.2019
 * Time: 11:59
 */
extract ($_GET);
foreach ($_GET as $nimetus => $vaartus){
    echo $nimetus.'=>'.$vaartus.'<br>';
}
$silRuumala = (3.14 * $raadius * $raadius * $korgus);
echo 'Silindri ruumala on '.$silRuumala.'<br>';

$kooRuumala = (3.14 * $raadius * $raadius * $korgus * 0.3);
echo 'Koonuse ruumala on '.$kooRuumala.'<br>';

$keraRuumala = (1.3 * 3.14 * $raadius * $raadius * $korgus);
echo 'Kera ruumala on '.$keraRuumala.'<br>';


