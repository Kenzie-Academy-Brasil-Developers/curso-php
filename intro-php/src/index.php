<?php

$name = 'tsunode';
echo "Hello from the docker container " . $name;

$hoje = date('d/m/Y');

echo "<br>";
echo $hoje;
echo "<br>";

if($name == 'João') {
    echo "Opa, João";
} elseif($name == 'Maria') {
    echo "Opa, Maria";
} else {
    echo "Opa, Tsunode";
}

echo $name == 'tsunode' ? "É o Tsunode mesmo" : "Ops";

$nome = "Meu";
$nome = ($nome) ?: "Sem nome";

echo "<br>";

echo $nome;

for ($i=0; $i < 10; $i++) {
  echo $i." ";
}

echo "<br>";

$arrayzinho = array('A', 'B', 'C', 'D', 'E');
$arrayzinhoOutraSuntax = ['A', 'B', 'C', 'D', 'E'];

echo print_r($arrayzinho);
echo "<br>";
echo 'Outra sintax' . print_r($arrayzinhoOutraSuntax);

foreach ($arrayzinho as $elemento){
    echo "<br>";
    echo $elemento;
}

// objetos com array
$user = [
    'name' => 'tsunode',
    'age' => 25
];

echo "<br>";
echo 'User ' . print_r($user);
echo 'User ' . print_r($user);

// Desestruturação Lista

[$name,, $dois] = $arrayzinho;

echo "<br>";
echo 'Letra ' . $dois;

// Desestruturação Objeto

['age' => $age] = $user;

echo "<br>";
echo 'Idade ' . $age;

foreach ($user as $elemento){
    echo "<br>";
    echo $elemento;
}

echo "<br>";
unset($arrayzinho[1]);
echo print_r($arrayzinho);

echo "<br>";
echo 'count: '. count($arrayzinho);


$novoUser = [...$user, 'surname' => 'Tsunode'];

echo "<br>";
echo print_r($novoUser);

$novoUser['teste'] = 'abacaxi';

echo "<br>";
echo print_r($novoUser);

function adicionaLetraJ($arrayzinho) {
    $arrayzinho[] = 'J';
    $arrayzinhoOr = array_values($arrayzinho); 

    return  $arrayzinhoOr;
}

$arrayzinhoOr = adicionaLetraJ($arrayzinho);
echo "<br>";
echo print_r($arrayzinhoOr);

