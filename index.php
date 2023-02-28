<?php 
    $dados[] = array("nome" => "Marcelo", "idade" => "52", "estilo" => "Rock");
    $dados[] = array("nome" => "José", "idade" => "18", "estilo" => "Clássica");
    $dados[] = array("nome" => "Maria", "idade" => "23", "estilo" => "Rock");
    $dados[] = array("nome" => "André", "idade" => "34", "estilo" => "MPB");
    $dados[] = array("nome" => "Epaminondas", "idade" => "48", "estilo" => "Rock");
    $dados[] = array("nome" => "Eddie", "idade" => "47", "estilo" => "Rock");

    echo "TODOS OS DADOS CADASTRADOS <br>";
    echo "<pre>";
    print_r($dados);
    echo "</pre>";

    function Compara($a , $b){
        return $a['nome'] > $b['nome'];
    }  

    usort($dados, 'Compara');

    echo "TODOS OS DADOS CADASTRADOS EM ORDEM ALFABÉTICA <br>";
    echo "<pre>";
    print_r($dados);
    echo "</pre>";    

    function gostaRock($dados){
        $resposta = array();
        foreach($dados as $item){
            if($item['estilo'] == 'Rock')
                $resposta[] = $item;
        }
        return $resposta;
    }
    
    $rock = gostaRock($dados);
    echo "TODOS OS QUE GOSTAM DE ROCK <br>";
    echo "<pre>";
    print_r($rock);
    echo "</pre>";    

    function naogostaRock($dados){
        $resposta = array();
        foreach($dados as $item){
            if($item['estilo'] != 'Rock')
                $resposta[] = $item;
        }
        return $resposta;
    }
    
    $naorock = naogostaRock($dados);
    echo "TODOS OS QUE NÃO GOSTAM DE ROCK <br>";
    echo "<pre>";
    print_r($naorock);
    echo "</pre>";    

    $maior = $dados[0];
    foreach($dados as $item){
        if ($item['idade'] > $maior['idade']){
            $maior = $item;
        }
    }

    echo "PESSOA COM A MAIOR IDADE <br>";
    echo "<pre>";
    print_r($maior);
    echo "</pre>";

    $menor = $dados[0];
    foreach($dados as $item){
        if ($item['idade'] < $menor['idade']){
            $menor = $item;
        }
    }

    echo "PESSOA COM A MENOR IDADE <br>";
    echo "<pre>";
    print_r($menor);
    echo "</pre>";
?>
