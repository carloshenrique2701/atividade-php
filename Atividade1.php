<?php

$usuario = [
    "nome" => "",
    "idade" => "",
    "hobbies" => []
];

echo "Por favor, insira seu primeiro nome: ";
$usuario["nome"] = trim(fgets(STDIN));

echo "\nPor favor, insira sua idade: ";
$usuario["idade"] = intval(trim(fgets(STDIN))); // Converte a idade para inteiro

for ($i = 0; $i < 3; $i++) {
    echo "\nPor favor, insira um hobby: ";
    $usuario["hobbies"][$i] = trim(fgets(STDIN)); // Corrigido o acesso ao array
}

echo exibirMensagem($usuario["nome"], $usuario["idade"]);

if ($usuario["idade"] > 18) {
    echo "É maior de idade\n";
} else {
    echo "É menor de idade\n";
}

echo "Seus hobbies são: \n";
foreach ($usuario["hobbies"] as $hobby) {
    echo "- " . $hobby . "\n"; // Adiciona uma quebra de linha para cada hobby
}

function exibirMensagem($nome, $idade)
{
    return "O usuário " . $nome . " tem " . $idade . " anos, portanto, "; // Corrigido o operador de concatenação
}