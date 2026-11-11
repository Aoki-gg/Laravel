<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Aluno;
use App\Models\Telefone;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view("aluno.aluno", compact(["alunos"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("aluno.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pessoa = Pessoa::create([
            "nome" => $request->input("nome"),
            "data_nascimento" => $request->input("data_nascimento"),
            "endereco" => $request->input("endereco"),
            "email" => $request->input("email"),
            "cpf" => $request->input("cpf")
        ]);

        Aluno::create([
            "pessoa_id" => $pessoa->id,
            "curso_id" => $request->input("curso_id"),
            "horas_totais" => 0
        ]);

        return redirect()->route("aluno.index")->with("sucesso", "Aluno cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(Teste $teste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teste $teste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teste $teste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teste $teste)
    {
        //
    }
}
