<?php
// objetivo: mostrar numeros de 1 a 20
function MostrarNumeros($nMin,$nMax){
    $allN = [];
    while($nMin<$nMax){
        $nMin++;
        $allN[] = $nMin;
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
?>
<head>
    <style>
        *{font-size: 1.2em}
    </style>
</head>
<?php
$op = $_GET['operation'];
$x = $_GET['x'];
$y = $_GET['y'];
if($op == 'par'){
    echo "Existem ".MostrarQuantidadeNumerosPares($x,$y)." numeros pares entre $x e $y";
}
if($op == 'todos'){
    echo "Os numeros entre $x e $y são: ".implode(",",MostrarNumeros($x,$y));
}
?>