<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 25.02.2019
 * Time: 9:25
 */
$raamat1 = array(
    'nimi' => 'Arvutitehnika Riistvara',
    'hind' => 31.49,
    'autor' => 'Teet Evartson',
    'lehekulgi' => 360
);
$raamat2 = array(
    'nimi' => 'Noor Leegion',
    'hind' => 17.95,
    'autor' => 'Hanno Ojalo',
    'lehekulgi' => 120
);
$raamat3 = array(
    'nimi' => 'Minu Dublin',
    'hind' => 5.99,
    'autor' => 'Kristiina Piip',
    'lehekulgi' => 240
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
?>

<table style="width: 50%;" border="3">
<tbody>
<tr>
<td>Raamatu nimi</td>
<td>Hind</td>
<td>Autor</td>
<td>Lehekulgi</td>
</tr>
<tr>
<td>Arvutitehnika Riistvara</td>
<td>31.49</td>
<td>Teet Evartson</td>
<td>360</td>
</tr>
<tr>
<td>Noor Leegion</td>
<td>17.95</td>
<td>Hanno Ojalo</td>
<td>120</td>
</tr>
<tr>
<td>Minu Dublin</td>
<td>5.99</td>
<td>Kristiina Piip</td>
<td>240</td>
</tr>
</tbody>
</table>