<div class="titulo">Escrevendo aquivo Api</div>
<?php
        // abrir aquivo          modo de escrite W
$arquivo = fopen('text.txt', 'w');
fwrite($arquivo, 'Valor inicial\n');