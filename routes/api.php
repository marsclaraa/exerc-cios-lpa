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