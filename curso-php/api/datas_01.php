<div class="titulo">Datas #01 API</div>
<?php
//echo time(). '<br>';
//
//echo date('D,M,Y H:i');// Dia semana d dia mes
setlocale(LC_TIME,'pt-br.utf-8');

echo strftime('%A, %d de %B de %Y', time() .'<br>');

$amanhan = time() + (24 * 60 * 60);// um dia
echo "<hr>";
echo strftime('%A, %d, de %B', $amanhan); //amanha um dia

$proximasemana = strtotime('+1 week');
echo "<br>";
echo strftime('%A, %d, de %B', $proximasemana); //amanha um dia

$datafixa = mktime('15, 30, 50,1,25,1975');
echo strftime('%A, %d de %B de %Y', $datafixa);
