<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Usuario', function (Request $request){ 

    $Usuario = $request->input("Nome"); 

    return $Usuario; 

}); 