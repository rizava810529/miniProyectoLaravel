<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\AlumnoController;



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



Route::controller(AlumnoController::class)->group(

    function () {
        Route::get('/alumnos', 'index');
        Route::get('/alumno/{id}','show');
        Route::post('/alumno/{id}', 'store');
        Route::put('/alumno/{id}', 'update');
        Route::delete('/alumno/{id}', 'destroy');
    }
);