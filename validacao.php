<?php 

require 'funcoes.php';

$variavel1 = 198;
$variavel2 = [ 'nome' => 'Pedro Luiz', 'endereco' => 'Av Taquara', 'telefone' => '(51) 5151-51511' ];
$variavel3 = 'Romarinho';

validaVariavel($variavel1, 'int');
validaVariavel($variavel2, 'array', 'endereco');
// Deixei como padrão na função a verificação de string
validaVariavel($variavel3);

