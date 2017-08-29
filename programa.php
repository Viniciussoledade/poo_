<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/08/17
 * Time: 16:11
 */

require 'classes/Conta.php';

$minhaConta = new Conta();

$minhaConta-> dono = "Jailson Mendes";
$minhaConta-> numeroConta = "696969";
$minhaConta-> saldo = 4000000.00;

$minhaConta-> deposita(10000);

$conseguiSacar = $minhaConta-> saca(8000);

if ($conseguiSacar){
    echo "Tá boiando no money \n";
}
else{
    echo "Não tem dinheiro, parça \n";
}

echo "o cliente {$minhaConta-> dono} possui saldo de {$minhaConta-> saldo} reais para tomar um suco de laranja bem preparado com seu amigo Paulo Guina";