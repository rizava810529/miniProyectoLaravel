<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::get('/docentes',[DocenteController::class,'index']); */



Route::controller(DocenteController::class)->group(

    function () {
        Route::get('/docentes', 'index');
        Route::get('/docente/{id}','show');
        Route::post('/docente/{id}', 'store');
        Route::put('/docente/{id}', 'update');
        Route::delete('/docente/{id}', 'destroy');
    }
);