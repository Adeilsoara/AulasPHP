<?php 
echo "<h2>Variáveis em PHP</h2>";
    print " Usando print - Código PHP <br>";
    echo " Usando echo - Código PHP <br>";
    $nome = "Robescleyson";
    $nota = 7.9;
    echo "O seu nome é: ".$nome. " e sua note é:".$nota. "<br>"; 

//Arrays em PHP
//Criar um Array
echo "<h2>Arrays</h2>";
$meuArray = array();
echo 'Dados no meu array: ', var_dump($meuArray), "<br>";

//Array com dados
$arrayPreechido = array(1, 2, 4, "casa");
echo 'Dados do meu array: ', var_dump($arrayPreechido) , "<br>";

//Inserir dados num array
$inserirDadosArray = array();
$inserirDadosArray[] = 0;
$inserirDadosArray[] = 1;
array_push($inserirDadosArray, 2);
echo "Dados inseridos no array: ", var_dump($inserirDadosArray), "<br>";
echo "Dados inseridos no array: ", print_r($inserirDadosArray), "<br>";

//Chaves específicas para o array
$arrayComChaves = array(
    "nome" => "Robert",
    "idade" => 16,
    "endereco" => 'Dom Pedro II'
);

//print_r($arrayComChaves);

//Iterando em arrays com Foreach

foreach($arrayComChaves as $chave => $item){
   echo "Itens do array: $chave $item <br> ";
}

$cores = array('vermelho', 'azul', 'verde', 'amarelo');

foreach ($cores as $cor) {
    echo "Você gosta de $cor? <br>";
}

//Alterando os valores de um array

$coresMaiusculas = array('vermelho', 'azul', 'verde', 'amarelo');
foreach($coresMaiusculas as &$cor){
    $cor = strtoupper($cor);
}

print_r($coresMaiusculas);

//Ordenando um array

$coresMaiusculas = array('vermelho', 'azul', 'verde', 'amarelo');
foreach($coresMaiusculas as &$cor){
    $cor = strtoupper($cor."<br>");
}
sort($coresMaiusculas);
print_r($coresMaiusculas);


//Remover elementos repetidos de um array

$numeros = array(1, 2, 3, 4, 5, 5, 1, 3);

$numeros = array_unique($numeros);

print_r($numeros);

//Filtrar elementos de um array

function filtro($valor)
{
    return $valor >= 10;
}

$numero = [1,2,700,13,6,78,100,212,15,2,3,1000,412,6];

$filtrado = array_filter($numero, 'filtro');
print_r($filtrado);


//Receber dados digitados pelo usuário
$arr = explode(' ', readline());
print_r($arr);

/* 1 - Crie um array com os 27 estados brasileiros
e os ordene por ordem alfabética
2 - Crie um array com 20 números e filtre apenas
os números pares, faça o mesmo para os números ímpares
3 - Crie um array de tamanho 5 com alguns nomes repetidos, faça que 
fique apenas os valores unicos
4 - Altere o array anterior para que fiquem todos com letras
maiúsculas */




















































