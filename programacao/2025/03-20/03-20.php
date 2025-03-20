<?php
// objetivo: mostrar numeros de 1 a 20
function MostrarNumeros($nMin,$nMax){
    $allN = [];
    while(1+$nMin<$nMax){
        $nMin++;
        $allN[] = $nMin;
    }
    return $allN;
}
function MostrarQuantidadeNumerosPares($nMin,$nMax){
    $Pares = [];
    while($nMin<$nMax){
        if($nMin % 2 == 0){
            $Pares[] = $nMin;
        }
        $nMin++;
    }
    return $Pares;
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
    echo "Existem ".count(MostrarQuantidadeNumerosPares($x,$y))." numeros pares entre $x e $y, são eles: ".implode(",",MostrarQuantidadeNumerosPares($x,$y));
}
if($op == 'todos'){
    echo "Os numeros entre $x e $y são: ".implode(",",MostrarNumeros($x,$y));
}
?>