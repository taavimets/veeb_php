<?php
header('Refresh: 2');
?>
<style>
    div {
        margin: auto;
        width: 100px;
        height: 100px;
        font-size: 80px;
        vertical-align: middle;
        text-align: center;
    }
    .paaris{
        background: red;
    }
    .paaritu{
        background: green;
    }
    .algarv{
        background: deepskyblue;
    }
    .tavaline{
        background: lightgray;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 13.02.2019
 * Time: 14:14
 */
    $arv = rand(0, 100);
    $jagaja = 2;
    while($arv % $jagaja != 0){
        $jagaja++;
    }
    if($arv == $jagaja) {
        echo '<div class="algarv">'.$arv.'</div>';
    } else {
        if ($arv % 2 == 0) {
            echo '<div class="paaris">' . $arv . '</div>';
        } else {
            echo '<div class="paaritu">' . $arv . '</div>';
        }
    }