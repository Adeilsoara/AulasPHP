<?php 
    echo "<h2>Variáveis em PHP</h2>";
    print " Usando print - Código PHP <br>";
    echo " Usando echo - Código PHP <br>";
    $nome = "Robescleyson";
    $nota = 7.9;
    echo "O seu nome é: ",$nome, " e sua note é:".$nota. "<br>"; 

echo "<h2>Arrays PHP</h2>";
$meuPrimeiroArray = array();
echo "Dados do meu array: ", var_dump($meuPrimeiroArray), "<br>";

$meuPrimeiroArray = array(1, 2.4, 3, 4,"casa");
$meuPrimeiroArray[1];

echo "Meu arrat com dados: ", var_dump($meuPrimeiroArray), "<br>";

echo "<h2> Inserindo dados no Array </h2>";
//Inserir dados no meu array
$inserirDados = array();
$inserirDados[] = "escola";
$inserirDados[] = 1;

echo "Dados do meu array: ",var_dump($inserirDados), "<br>";

array_push($inserirDados, 7.8);

echo "Dados do meu array: ",var_dump($inserirDados), "<br>";
echo "Dados do meu array: ",print_r($inserirDados), "<br>";

$arrayComChaves = array(
    "nome" => "Robert",
    "idade" => 16,
    "endereco" => "Rua das Pedras"
);

echo "Array com chaves/indices: ", print_r($arrayComChaves), "<br>";

//Iterando sobre arrays
echo "<h2> Foreach </h2>";

foreach($arrayComChaves as $chave){
    echo "Itens do meu array: $chave <br>";
}

$arrayDeNumeros = array(1, 2, 3, 4, 5, 6);
foreach($arrayDeNumeros as $numero){
    echo "Item: $numero <br>";
}

//Modificando itens do array
$cores = array('vermelho', 'amarelo', 'verde', 'azul');
foreach($cores as &$cor){
    $cor = strtoupper($cor);
}
print_r($cores);

//ELiminar itens repetidos de um array
$repetidos = array(1, 2, 2, 3, 5, 5, 7, 8, 8 );
$repetido = array_unique($repetidos);
print_r($repetido);

$nomesRepetidos = array("Robert", "robert", "Carlos", "Amanda", "Amanda");
$nomes = array_unique($nomesRepetidos);
print_r($nomes);

//Filtrar elementos de um array
function filtro($valor){
    return $valor >=10;
}

$numeros = array(1, 2, 67, 79, 600, 9, 22, 34, 13, 17);
$filtro = array_filter($numeros, 'filtro');
print_r($filtro);