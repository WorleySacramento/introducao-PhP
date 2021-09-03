<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);



$nome = 'Eduardo';
$idade = 8;

//var_dump($nome);
//var_dump($idade);


if($idade >= 6 && $idade <= 12)
{
    for ($1 = 0; $1 <= count($categorias); $1++)
    {
        if($categorias[$1] == 'infantil')
            echo "O nadador" ,$nome, !"Compete na categoria infantil";
    }
    
}
elseif($idade >= 13 && $idade <=17)
{
    echo 'adolescente';
}
else
{
    echo 'adulto';
}