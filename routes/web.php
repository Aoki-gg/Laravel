<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CertificadoController;

Route::get('/', function () {
    // return view('welcome');
    return "<h1>asdsadas</h1>";
});

Route::get("/aluno", [AlunoController::class, "index"])->name("aluno.index");

Route::get("/aluno/cadastro", [AlunoController::class, "create"])->name("aluno.cadastro");

Route::post("aluno/cadastro/salvar", [AlunoController::class, "store"])->name("aluno.store");

Route::get("/professor", [ProfessorController::class, "index"]);

Route::get("/curso", [CursoController::class, "index"]);

Route::get("/certificado", [CertificadoController::class, "index"]);