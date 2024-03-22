<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Usuario', function (Request $request) {

    $Usuario = $request->input("Nome");
    return $Usuario;
});


Route::get('/Dados', function (Request $request) {

    $Dado1 = $request->input("nome");
    $Dado2 = $request->input("idade");
    return 'Meu nome é ' . $Dado1 . ', tenho ' . $Dado2 . ' anos de idade';
});

Route::get('/Informações', function (Request $request) {


    $NOME = $request->input("nome");
    $AN = $request->input("ano de nascimento");
    $CN = $request->input("cidade natal");
    return 'Meu nome é ' . $NOME . ', nasci no ano de ' . $AN . ', na cidade de ' . $CN;
});

Route::get('/soma', function (Request $request) {

    $primeiroNumero = $request->input("numeral 1");
    $segundoNumero = $request->input("numeral 2");
    $resultado = $primeiroNumero + $segundoNumero;
    return 'O resultado da soma dos números ' . $primeiroNumero . '+' . $segundoNumero . ' = ' . $resultado;
});



Route::get('/subtração', function (Request $request) {

    $primeiroNumero = $request->input("numeral 1");
    $segundoNumero = $request->input("numeral 2");
    $terceiroNumero = $request->input("numeral 3");
    $resultado = $primeiroNumero - $segundoNumero -  $terceiroNumero;

    return 'O resultado da soma dos números ' . $primeiroNumero . '-' . $segundoNumero . '-' . $terceiroNumero . ' = ' . $resultado;
});

Route::get('/divisão', function (Request $request) {


    $primeiroNumero = $request->input("numeral 1");
    $segundoNumero = $request->input("numeral 2");
    $resultado = $primeiroNumero / $segundoNumero;

    return 'O resultado da soma dos números ' . $primeiroNumero . ':' . $segundoNumero . ' = ' . $resultado;
});


Route::get('/multiplicação', function (Request $request) {


    $primeiroNumero = $request->input("numeral 1");
    $segundoNumero = $request->input("numeral 2");
    $resultado = $primeiroNumero * $segundoNumero;
    return 'O resultado da multiplicação dos números ' . $primeiroNumero . 'x' . $segundoNumero . ' = ' . $resultado;
});

Route::get('/média', function (Request $request) {

    $NOTA1 = $request->input("NOTA 1");
    $NOTA2 = $request->input("NOTA 2");
    $NOTA3 = $request->input("NOTA 3");
    $NOTA4 = $request->input("NOTA 4");
    $NOTA5 = $request->input("NOTA 5");
    $DIVISÃO = $request->input("DIVISÃO");
    $resultado = ($NOTA1 + $NOTA2 + $NOTA3 + $NOTA4 + $NOTA5) / 5;

    return 'A media do usuário é ' . $resultado . '.';
});

Route::get('/divisão/inversa', function (Request $request) {

    $primeiroNumero = $request->input("numeral 1");
    $segundoNumero = $request->input("numeral 2");
    $resultado = $segundoNumero / $primeiroNumero;
    return 'O resultado da divisão dos números ' . $segundoNumero . ':' . $primeiroNumero . ' = ' . $resultado;
});

Route::get('/dobro', function (Request $request) {

    $primeiroNumero = $request->input("numeral 1");

    $resultado = $primeiroNumero * 2;
    return 'O dobro do número  é igual a ' . $resultado;
});

Route::get('/área do retângulo', function (Request $request) {

    $base = $request->input("base");
    $altura = $request->input("altura");
    $resultado = $base * $altura;
    return 'a área do retângulo é ' . $resultado;
});

Route::get('/desconto', function (Request $request) {

    $preço = $request->input("Preço do Produto");
    $porcentagem = $request->input("Porcentagem");
    $resultado = $preço - ($preço * $porcentagem / 100);

    return 'O preço final do produto será = ' . $resultado;
});


Route::get('/aumento salarial', function (Request $request) {



    $salarioAnterior = $request->input("Salário Anterior");
    $porcentual = $request->input("Porcentual de Aumento");

    $aumento = ($porcentual / 100) * $salarioAnterior;
    $salarioAtual = $aumento + $salarioAnterior;

    return 'O salário anterior era de ' . $salarioAnterior . ' .O salário atual é ' . $salarioAtual . ' .O aumento salarial será de ' . $aumento . ' reais';
});

Route::get('/programa de fidelidade', function (Request $request) {

    $valorDaCompra = $request->input("valor da compra");
    $pontosDeRecompensa = $valorDaCompra / 10;

    return 'Os pontos de recompensa serão: ' . $pontosDeRecompensa;
});

Route::get('/comissão', function (Request $request) {

    $vendas = $request->input("valor das vendas");
    $comissão = ($vendas * 5) / 100;


    return 'A comissão será de: ' .  $comissão;
});

Route::get('/dias', function (Request $request) {

    $dias = $request->input("dias");
    $horas = $dias * 24;
    $minutos = $dias * 1440;
    $segundos = $dias * 86400;

    return 'Em ' . $dias . ' dias, temos ' . $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos.';
});

Route::get('/total da compra', function (Request $request) {

    $preçoDoProduto = $request->input("Preço do Produto");
    $quantidadeComprada = $request->input("Quantidade Comprada");
    $preço = $preçoDoProduto * $quantidadeComprada;
    return 'O valor total da compra é de:  ' .  $preço;
});






Route::get('exercício1', function (Request $request) {

    $numero = $request->input('número');

    if ($numero >= 10) {;

        return "maior que 10";
    } else {;

        return "menor que 10";
    }

    if ($numero = 10) {;

        return "igual a 10";
    }
});



Route::get('exercício2', function (Request $request) {

    $numero = $request->input('número');

    if ($numero > 0) {

        return $numero . " este número é positivo";
    } elseif ($numero < 0) {

        return $numero . " este número é negativo";
    } else {

        return $numero . " este número é nulo";
    }
});

Route::get('exercício3', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade >= 18) {
        return $idade . " anos, você é maior de idade";
    } else {
        return $idade . " anos, você é menor de idade";
    }
});

Route::get('exercício4', function (Request $request) {
    $numero = $request->input('número');

    if ($numero % 2 == 0) {
        return $numero . ', é par';
    } else {
        return $numero . ', é impar';
    }
});

Route::get('exercício5', function (Request $request) {

    $numero1 = $request->input('número 1');

    $numero2 = $request->input('número 2');

    if ($numero1 > $numero2) {

        return "O número 1 (" . $numero1 . ") é maior que o número 2.";
    } else {
        return "O número 2 (" . $numero2 . ") é maior que o número 1.";
    }
});
Route::get('lista/exercício6', function (Request $request) {

    $numero = $request->input('número');

    if ($numero % 9 == 0) {

        return $numero . ", é divisível por 9!";
    } else {

        return $numero . ", não é divisível por 9!";
    }
});

Route::get ('exercício7',function(Request $request){ 

    echo 'Qual a temperatura atual? ';  

    $temperatura = $request -> input ('grau de temperatura'); 

    if ($temperatura >= 30){; 

    return $temperatura . "°, ESTÁ QUENTE!"; 

    } else {; 

        return $temperatura . "°, Não está tão quente..."; 

    } 

    }); 


    Route::get('exercício8', function(Request $request){
        $numero = $request->input('numero');
    
       if($numero % 7 == 0){
        return $numero . ', é múltiplo de 7!';
       } else {
        return $numero . ', não é múltiplo de 7!';
       }
    
    });

    Route::get('exercício9', function(Request $request){
        $idade = $request->input('idade');
      
        if($idade <= 12){
          return $idade . " anos, você é uma criança!";
               
          } else {
              return $idade . "anos, você não é criança!";
          
          }
      
           });

           Route::get('exercício10', function(Request $request){
            $numero = $request->input('numero');
            if($numero < 0) 
            if ($numero % 2 == 0){
            return "o número" . $numero . "é neagtivo e par";
             } elseif($numero > 0) 
             if ($numero % 2 > 0){
                return "o número" . $numero . "é positivo e impar";
             }
  
            });

            Route::get('exercício11', function(Request $request){
                $numero = $request->input('numero');
              
                if($numero = 100){
                  return  $numero . ", é = a cem";
                       
                  } elseif ($numero < 100) {
                      return  $numero .", é maior que 100";
                     }

                     else {
                        return $numero .", é menor que 100";
                     }
                   });