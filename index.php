<?php
require_once 'funcoes.php';


//$contador = 1;
//
//while ($contador < 15) {
//    echo "$contador" . PHP_EOL;
//    $contador++;
//}
//
//for ($contador = 1; $contador < 15; $contador++){
//    echo "$contador" . PHP_EOL;
//}

//for ($i = 0; $i <100; $i++) {
//    if ($i % 2 == 1) {
//        echo "$i" . PHP_EOL;
//    }
//}

//for ($i = 1; $i <= 10; $i++) {
//    $tabuada = $i * 2;
//    echo $tabuada . PHP_EOL;
//}


//Listas de dados

$idadeList = array(21, 22, 24, 29);

for ($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i];
}

//Arrays associativos
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 1000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //utlizando list
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

