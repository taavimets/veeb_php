<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 11.03.2019
 * Time: 8:39
 */

class Car {
    public $comp;
    public $color = 'blue';
    public $hasSunRoof = false;
}

$bmw = new Car ();
$bmw -> color = 'blue';
echo $bmw -> color;