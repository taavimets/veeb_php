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

for($arv = 0; $arv <= 10; $arv++){
    paarsuseKontroll($arv);
}