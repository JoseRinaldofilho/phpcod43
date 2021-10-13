<div class="titulo">Datas #02 DeteTime </div>
<?php
$formatoData1 = 'D, d zdze M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

//print_r($agora);
//echo "<br>";
echo $agora->format($formatoData1). '<br>';

setlocale(LC_TIME,'pt-br');
echo strftime($formatoData2, $agora->getTimestamp()). '<br>';
echo strftime($formatoDataHora);
echo "<hr>";

$ontem = new DateTime('-2 day');
$amanhan= new DateTime('+1 day');
echo strftime($formatoDataHora, $amanhan->getTimestamp()).' amanhan <br>  ';
echo strftime($formatoDataHora, $ontem->getTimestamp()).' ontem ontem <hr> ';

$amanhan->modify('+1 day');
echo strftime($formatoDataHora,$amanhan->getTimestamp())."<hr>";

