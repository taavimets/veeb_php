<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 20.02.2019
 * Time: 14:58
 */
$george = array(
    'nimi' => 'George',
    'sugu' => 'mees',
    'vanus' => 2,
    'pikkus' => 0.95
);
$peppa = array(
    'nimi' => 'Peppa',
    'sugu' => 'naine',
    'vanus' => 4,
    'pikkus' => 1.04
);

echo $george['nimi'].' on '.$george['vanus'].' aastat vana<br>';
echo $peppa['nimi'].' on '.$peppa['vanus'].' aastat vana<br>';

$porsad = array();
$porsad['peppa'] = $peppa;
$porsad['george'] = $george;
echo '<pre>';
print_r($porsad);
echo'</pre>';
