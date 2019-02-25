<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 25.02.2019
 * Time: 9:25
 */
$raamatud = array(
$raamat1 = array(
    'nimi' => 'Arvutitehnika Riistvara',
    'hind' => 31.49,
    'autor' => 'Teet Evartson',
    'lehekulgi' => 360
),
$raamat2 = array(
    'nimi' => 'Noor Leegion',
    'hind' => 17.95,
    'autor' => 'Hanno Ojalo',
    'lehekulgi' => 120
),
$raamat3 = array(
    'nimi' => 'Minu Dublin',
    'hind' => 5.99,
    'autor' => 'Kristiina Piip',
    'lehekulgi' => 240
),
);
echo '<pre>';
print_r($raamat1);
echo '</pre>';

echo '<pre>';
print_r($raamat2);
echo '</pre>';

echo '<pre>';
print_r($raamat3);
echo '</pre>';

function tabeliPais($andmed){
    echo '<thead>';
        echo '<tr>';
        foreach ($andmed as $element){
            echo '<th>'.$element.'</th>';
        }
        echo '</tr>';
    echo '</thead>';
}

$tabeli_pealkiri = array_keys($raamatud[0]);
echo '<table border="1">';
tabeliPais($tabeli_pealkiri);
echo '</table>';