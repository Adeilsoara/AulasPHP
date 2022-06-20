<?php
//Atividades

/* 1 - Crie um array com os 27 estados brasileiros
e os ordene por ordem alfabética
2 - Crie um array com 20 números e filtre apenas
os números pares, faça o mesmo para os números ímpares
3 - Crie um array de tamanho 5 com alguns nomes repetidos, faça que 
fique apenas os valores unicos
4 - Altere o array anterior para que fiquem todos com letras
maiúsculas */


/* 1 - Crie um array com os 27 estados brasileiros e os ordene por ordem alfabética */
echo "<h3>1 - Crie um array com os 27 estados brasileiros e os ordene por ordem alfabética</h3>";
$estados = array('Distrito Federal', 'Tocantins', 'Sergipe', 'São Paulo', 'Santa Catarina', 'Roraima',
'Rondônia', 'Rio Grande do Sul', 'Rio Grande do Norte', 'Rio de Janeiro', 'Piauí', 'Pernambuco', 'Paraná',
'Paraíba', 'Pará', 'Minas Gerais', 'Mato Grosso do Sul', 'Mato Grosso', 'Maranhão', 'Goiás','Espírito Santo',
'Ceará', 'Bahia', 'Amazonas', 'Amapá', 'Alagoas', 'Acre' );

sort($estados);
foreach($estados as $indice => $estado){
    echo $indice + 1 ." - ". $estado ."<br>";
}
//print_r($estados);

/* 2 - Crie um array com 20 números e filtre apenas os números pares, faça o mesmo para os números ímpares */

echo "<h3>2 - Crie um array com 20 números e filtre apenas os números pares, faça o mesmo para os números ímpares</h3>";
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

function filtrarPares($valor)
{
    return $valor % 2 == 0;
}

$pares = array_filter($numeros, 'filtrarPares');
print_r($pares);

/* 3 - Crie um array de tamanho 5 com alguns nomes repetidos, faça que  fique apenas os valores unicos */

echo "<h3>3 - Crie um array de tamanho 5 com alguns nomes repetidos, faça que  fique apenas os valores únicos</h3>";

$nomes = array('Márcia', "Raimundo", "Carlos", "Carlos", "Igor", "Renan", "Renan");

$nomesNaoRepetidos = array_unique($nomes);
print_r($nomesNaoRepetidos);

/* 4 - Altere o array anterior para que fiquem todos com letras maiúsculas  */
echo "<h3>4 - Altere o array anterior para que fiquem todos com letras maiúsculas</h3>";

$nomes = array("Márcia", "Raimundo", "Carlos", "Carlos", "Igor", "Renan", "Renan");

foreach($nomes as $nome){
    echo strtoupper($nome) ."<br>";
}

/* 5 - Faça o sorteio de um nome em um array de nomes */
echo "<h3>5 - Faça o sorteio de um nome em um array de nomes</h3>";

$pessoas = array("Márcia", "Raimundo", "Carlos", "Alberto", "Igor", "Renan", "Renata");

//Realiza o sorteio de uma pessoa
$sorteio = array_rand($pessoas, 1);
echo "O nome sorteado foi: ".$pessoas[$sorteio];

/* Função explode e implode */

echo "<h3>Função explode e implode</h3>";
$str="Distrito Federal Tocantins Sergipe São Paulo Santa Catarina Roraima
Rondônia Rio Grande do Sul Rio Grande do Norte Rio de Janeiro Piauí Pernambuco Paraná
Paraíba Pará Minas Gerais Mato Grosso do Sul Mato Grosso Maranhão Goiás Espírito Santo
Ceará Bahia Amazonas Amapá Alagoas Acre";
$string = (explode(" ",$str));
print_r($string);
$string = (implode(" ", $string));
print_r($string);
?>