<?php

/*Você foi contratado para desenvolver um conversor de unidades, onde o usuário poderá inserir
valores em milímetros, centimetros, metros ou quilômetros e a aplicação deverá trazer a informação
do valor correspondente nas demais unidades. */

/*O programa deve seguir as restrições abaixo
- O programa deve solicitar ao usuário que informe qual a unidade base do valor a ser inserido
- O programa não deve permitir o avanço das etapas caso o usuário digite uma unidade inválida
- O programa deve solicitar ao usuário o valor da unidade base
- O programa não deve permitir o avanço das etapas caso o usuário digite um valor não numérico
- O programa deverá imprimir os valores correspondentes em todas as unidades disponíveis no sistema,
exceto aquela que o usuário inseriu */

    $_result = $_POST["opcao"];

    $_numero = $_POST["numero"];

    $_convert_to_number = 0 + $_numero;

    function conversor($valor, $unidade) {
        $conversor = 0;

        if($valor < 0) {
            echo "Valor inválido! <br> O valor deve ser um number e tem que ser maior que 0";
        } else if (is_integer($valor)) {
            switch($unidade) {
                case "m": 
                    echo "$valor metros";
                break;

                case "mm":
                    $conversor = $valor / 0.0010000;
                    echo "$conversor em milimetros";
                break;

                case "km":
                    $conversor = $valor / 1000;

                    echo "$conversor em quilometros";
                break;

                case "cm":
                    $conversor = $valor / 0.010000;

                    echo "$conversor em centimetos";
                break;
            }
        }
    }

    conversor($_convert_to_number, $_result);
    

    

