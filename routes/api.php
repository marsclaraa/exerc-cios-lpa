<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Usuario', function (Request $request){ 

    $Usuario = $request->input("Nome"); 
    return $Usuario; 

}); 


Route::get('/Dados', function (Request $request){ 

    $Dado1 = $request->input("nome"); 
    $Dado2 = $request->input("idade"); 
    return 'Meu nome é ' . $Dado1 . ', tenho ' . $Dado2 . ' anos de idade';  

}); 

Route::get('/Informações', function (Request $request){ 
    

    $NOME = $request->input("nome"); 
    $AN = $request->input("ano de nascimento"); 
    $CN = $request->input("cidade natal"); 
    return 'Meu nome é ' . $NOME . ', nasci no ano de ' . $AN . ', na cidade de ' . $CN ;   

}); 

Route::get('/soma', function(Request $request){ 

    $primeiroNumero = $request->input("numeral 1"); 
    $segundoNumero = $request->input("numeral 2"); 
    $resultado = $primeiroNumero + $segundoNumero; 
    return 'O resultado da soma dos números ' . $primeiroNumero . '+' . $segundoNumero . ' = ' . $resultado; 

    }); 

     

Route::get('/subtração', function(Request $request){ 

    $primeiroNumero = $request->input("numeral 1"); 
    $segundoNumero = $request->input("numeral 2"); 
    $terceiroNumero = $request->input("numeral 3"); 
    $resultado = $primeiroNumero - $segundoNumero -  $terceiroNumero ; 

    return 'O resultado da soma dos números ' . $primeiroNumero . '-' . $segundoNumero . '-' . $terceiroNumero . ' = ' . $resultado; 

    }); 

    Route::get('/divisão', function(Request $request){ 


        $primeiroNumero = $request->input("numeral 1"); 
        $segundoNumero = $request->input("numeral 2"); 
        $resultado = $primeiroNumero / $segundoNumero; 

        return 'O resultado da soma dos números ' . $primeiroNumero . ':' . $segundoNumero . ' = ' . $resultado; 

            }); 


            Route::get('/multiplicação', function(Request $request){ 

 
                $primeiroNumero = $request->input("numeral 1"); 
                $segundoNumero = $request->input("numeral 2"); 
                $resultado = $primeiroNumero * $segundoNumero; 
                return 'O resultado da multiplicação dos números ' . $primeiroNumero . 'x' . $segundoNumero . ' = ' . $resultado; 
    
                }); 
    
                Route::get('/média', function(Request $request){ 

                    $NOTA1 = $request->input("NOTA 1"); 
                    $NOTA2 = $request->input("NOTA 2"); 
                    $NOTA3 = $request->input("NOTA 3"); 
                    $NOTA4 = $request->input("NOTA 4");
                    $NOTA5 = $request->input("NOTA 5"); 
                    $DIVISÃO = $request->input("DIVISÃO"); 
                    $resultado = ($NOTA1 + $NOTA2 + $NOTA3 + $NOTA4 + $NOTA5) / $DIVISÃO; 

                    return 'A media do usuário é ' . $resultado . '.'; 
        
                    }); 
        
                    Route::get('/divisão', function(Request $request){ 
 
                        $primeiroNumero = $request->input("numeral 1"); 
                        $segundoNumero = $request->input("numeral 2");
                        $resultado = $segundoNumero / $primeiroNumero;
                        return 'O resultado da divisão dos números ' . $segundoNumero . ':' . $primeiroNumero . ' = ' . $resultado; 
            
                        }); 
         
                        Route::get('/dobro', function(Request $request){ 

                            $primeiroNumero = $request->input("numeral 1"); 
                            $dobro = $request->input("dobro"); 
                            $resultado = $primeiroNumero * $dobro; 
                            return 'O dobro do número  é igual a ' . $resultado; 
            
                            }); 

                            Route::get('/área do retângulo', function(Request $request){

                                $base = $request->input("base");
                                $altura = $request->input("altura"); 
                                $resultado = $base * $altura;
                                return 'a área do retângulo é ' . $resultado; 
            
                                }); 
     
                                Route::get('/desconto', function(Request $request){ 

                                    $preço = $request->input("Preço do Produto"); 
                                    $porcentagem = $request->input("Porcentagem"); 
                                    $resultado = $preço - ($preço * $porcentagem / 100) ;   
            
                                    return 'O preço final do produto será = ' . $resultado; 
            
                                    }); 


                                    Route::get('/aumento salarial', function(Request $request){ 

 

                                        $salarioAnterior = $request->input("Salário Anterior"); 
                                        $salarioAtual= $request->input("Salário Atual"); 
                                        $porcentual=$request->input("Porcentual de Aumento"); 
                                        $resultado = ($salarioAnterior * $porcentual / 100) ;   
            
                                        return 'O salário anterior era de ' . $salarioAnterior . ' .O salário atual é ' . $salarioAtual . ' .O aumento salarial será de ' . $resultado; 
            
                                        }); 

                                        Route::get('/programa de fidelidade', function(Request $request){ 

                                        $valorDaCompra = $request->input("valor da compra"); 
                                        $pontosDeRecompensa = $valorDaCompra/10; 

                                        return 'Os pontos de recompensa serão: ' . $pontosDeRecompensa;  
            
                                         }); 

                                        Route::get('/comissão', function(Request $request){ 

                                        $vendas = $request->input("valor das vendas"); 
                                        $comissão = ($vendas * 5)/100; 


                                        return 'A comissão será de: ' .  $comissão; 
                                        }); 
             
                                        Route::get('/dias', function(Request $request){ 

                                            $dias = $request->input("dias"); 
                                            $horas = $dias*24; 
                                            $minutos = $dias*1440; 
                                            $segundos = $dias*86400; 
 
                                            return 'Em ' . $dias . ' dias, temos ' . $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos.' ; 
                                           
                                           }); 