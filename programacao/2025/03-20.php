<?php
// objetivo: mostrar numeros de 1 a 20
function MostrarNumeros($nMin,$nMax){
    while($nMin<$nMax){
        $allN = [];
        $allN = $allN+$nMin;
        $nMin++;
    }
    return $allN;
}
function MostrarQuantidadeNumerosPares($nMin,$nMax){
    $quantidadeNPares = 0;
    while($nMin<$nMax){
        if($nMin % 2 == 0){
            $quantidadeNPares++;
        }
        $nMin++;
    }
    return $quantidadeNPares;
}

echo MostrarQuantidadeNumerosPares(1,20);

?>