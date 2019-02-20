<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 20.02.2019
 * Time: 12:08
 */

function paarsuseKontroll($arv){
    if($arv % 2 == 0){
        echo $arv.' on paaris<br>';
    } else {
        echo $arv.' on paaritu<br>';
    }
}

paarsuseKontroll(7);
paarsuseKontroll(15);
paarsuseKontroll(68);
paarsuseKontroll(9);
paarsuseKontroll(24);
paarsuseKontroll(35);
paarsuseKontroll(1);