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
</style>
<?php

$arv = rand(0, 100);
$jaak = $arv % 2;
if($jaak == 0) {
    echo '<div class="paaris">'.$arv.'</div>';
} else {
    echo '<div class="paaritu">'.$arv.'</div>';
}
