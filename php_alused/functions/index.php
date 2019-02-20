<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 20.02.2019
 * Time: 12:08
 */

function kasPaaris($arv){
    if($arv % 2 == 0){
        $kontroll = true;
    } else {
        $kontroll = false;
    }
    return $kontroll;
}

function kasAlgarv($arv){
    $jagaja = 2;
    if($arv == 0 or $arv == 1) {
        $kontroll = true;
    } else {
        while ($arv % $jagaja != 0) $jagaja++;
        if ($arv == $jagaja) {
            $kontroll = true;
        } else {
            $kontroll = false;
        }
    }
    return $kontroll;
}

function tabeliPais(){
    echo '
        <thead>
                <tr>
                    <th>arv</th>
                    <th>paaris</th>
                    <th>paaritu</th>
                    <th>algarv</th>
                </tr>
        </thead>
        ';
}

    function tabeliRida($arv){
        echo '<tr>';
            echo '<td>'.$arv.'</td>';
            echo '<td class="paaris">';
            if(kasPaaris($arv)){
                echo '<i class="fas fa-angle-down"></i>';
            }
        echo '<tr>';
        echo '<td>'.$arv.'</td>';
        echo '<td class="paaritu">';
        if(kasPaaris($arv)){
            echo '<i class="fas fa-angle-down"></i>';
        }
        echo '<tr>';
        echo '<td>'.$arv.'</td>';
        echo '<td class="algarv">';
        if(kasPaaris($arv)){
            echo '<i class="fas fa-angle-down"></i>';
        }
        echo '</td>';
     echo '</tr>';
}

function tabel($ridadeArv){
        echo '<table>';
        echo tabeliPais();
        echo '<tbody>';
        for($reanumber = 0; $reanumber <= $ridadeArv; $reanumber++){
            tabeliRida($reanumber);
        }
        echo '</tbody>';
        echo '</table>';
}