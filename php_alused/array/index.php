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

foreach ($peppa as $nimi=>$vaartus) {
    echo $nimi.' - '.$vaartus.'<br>';
}

echo '<hr>';

foreach ($george as $nimi=>$vaartus) {
    echo $nimi.' - '.$vaartus.'<br>';
}

$porsad = array();
$porsad['peppa'] = $peppa;
$porsad['george'] = $george;

echo $george['nimi'].' on '.$george['vanus'].' aastat vana<br>';
echo $peppa['nimi'].' on '.$peppa['vanus'].' aastat vana<br>';
echo '<hr>';

foreach ($porsad as $porsaseNimi=>$porsaseAndmed){
    if($porsaseAndmed['sugu'] == 'naine'){
        echo '<p style="color: red">';
    } else {
        echo '<p style="color: blue">';
    }
    echo '<b>'.$porsaseNimi.'</b><br>';
    foreach ($porsaseAndmed as $nimetus=>$vaartus){
        echo '<li>'.$nimetus.' - '.$vaartus.'</li>';
    }
    echo '</ul>';
}
