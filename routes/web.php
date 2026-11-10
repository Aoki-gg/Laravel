<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/alunos', [AlunoController::class, 'aluno']);

