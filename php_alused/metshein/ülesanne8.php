<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 04.03.2019
 * Time: 10:22
 */

echo date('04.03.2019 G:i' , time()+120*60).'<br>';


$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
echo $paev.'.'.$kuu.' '.$aasta.'<br>';

$nadalapaev = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühaäev');
$nadalapaev = $npaev = date("l");

echo $paev.'.'.$kuu.' '.$aasta.' '.$npaev.'<br>';

$sp = mktime(0,0,0,06,24,2019);
$jaanipaev = $sp;



