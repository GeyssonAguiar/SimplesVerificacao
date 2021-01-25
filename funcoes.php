<?php 

function validaVariavel ($variavel, $funcValidaTipo = 'string', $validaIndice = null) 
{   
    // Inicia uma string para mostrar no final
    $resultado = '';
    
    // Verifica se a variavel foi atribuida
    if(isset($variavel)) {
        $resultado .= ' - Variavel existe';
    }
    // Verifica se variavel esta vazia
    if(!empty($variavel)) {
        $resultado .= ' - Não esta vazia';
    }
    
    // Faz as verificações de tipo
    if($funcValidaTipo == 'array') {
        if(is_array($variavel)) {
            $resultado .= ' - Contêm array ';
            // Verifica um indice do array
            if(is_string($variavel[$validaIndice])) {
                $resultado .= ' - Indice valido';
            }
        }

    }else if($funcValidaTipo == 'string') {
        if(is_string($variavel)) {
             $resultado .= ' - É do tipo string';
        }

    }else if($funcValidaTipo == 'int') {
        if(is_int($variavel)) {
            $resultado .= ' - É do tipo int';
        }
    }

    echo $resultado;
}
