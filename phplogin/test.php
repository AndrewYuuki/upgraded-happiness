<?php
$nome = "Andy";
$idade = 16;

if ($idade >= 18) {
    echo "Voto obrigatório";
} elseif ($idade > 70 || $idade >= 16 && $idade < 18) {
    echo "Voto facultativo";
} else {
    echo "Você não pode votar";
}

?>