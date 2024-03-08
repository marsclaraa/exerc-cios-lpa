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