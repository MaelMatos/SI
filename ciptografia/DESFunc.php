<?php
//definição variaveis base
$texto = $_GET['texto'];
$i = 0;
$textoAscii = [];
$textoBinario = [];
//conversão texto para binário e ASCII
while ($i < strlen($texto)) {
    $textoAscii[$i] = ord($texto[$i]);
    $textoBinario[$i] = str_pad(decbin($textoAscii[$i]), 8, '0', STR_PAD_LEFT);
    $i++;
}
$contBytes = count($textoAscii);
while ($contBytes % 8 != 0) {
    $textoBinario[] = '00000000';
    $contBytes++;
}
//conversão binário para texto
function binStr($binario){
    $subStrings = [];
    $i = 0;
    while ($i <count($binario)) {
        $subStrings[] = chr(bindec($binario[$i]));
        $i++;
    }
    return join('', $subStrings);
}

function strXOR($str1, $str2){
    //str1 = texto binário
    //str2 = chave binária
    //retorna texto binário
    // ambos devem ter mesmo tamanho(1Byte)
    $strXOR = [];
    for ($i=0; $i < 7; $i++) {
        if($str1[$i] == $str2[$i]){
            $strXOR[$i] = '0';
        }else{
            $strXOR[$i] = '1';
        }
    }
    return join('', $strXOR);
}





?>