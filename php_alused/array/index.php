<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 20.02.2019
 * Time: 14:58
 */
    $peppaPig = array(
        'Peppa',
        'naine',
        4,
        1.04
    );

echo $peppaPig[0].'<br>';
echo $peppaPig[1].'<br>';
echo $peppaPig[2].'<br>';
echo $peppaPig[3].'<br>';

echo '<hr>';

for($i = 0; $i < count($peppaPig); $i++){
    echo $peppaPig[$i].'<br>';
}

echo '<hr>';

foreach ($peppaPig as $element){
    echo $element.'<br>';
}