<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 20.02.2019
 * Time: 14:58
 */
$porsad = array(
    array(
        'George',
        'mees',
        2,
        0.95
    ),
    array(
        'Peppa',
        'naine',
        4,
        1.04
    )
);

$porsad[0][] = 'sinine';
$porsad[1][] = 'punane';

echo $porsad[0][0].'<br>';
echo $porsad[0][1].'<br>';
echo $porsad[0][2].'<br>';
echo $porsad[0][3].'<br>';

echo '<hr>';

for($i = 0; $i < count($porsad); $i++){
    for ($j = 0; $j < count($porsad[$i]); $j++){
        echo $porsad[$i][$j].'<br>';
    }
    echo '<hr>';
}

echo '<hr>';

foreach ($porsad as $porsas){
    foreach ($porsas as $element){
        echo $element.'<br>';
    }
    echo '<hr>';
}