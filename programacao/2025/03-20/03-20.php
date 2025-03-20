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
$op = $_GET['operation'];
$x = $_GET['x'];
$y = $_GET['y'];
if($op == 'par'){
    echo "Existem ".MostrarQuantidadeNumerosPares($x,$y)." numeros entre $x e $y";
}
if($op == 'todos'){
    echo "Os numeros entre $x e $y sao: ".MostrarNumeros($x,$y);
}
else{
    echo "Operacao invalida";
}

?>