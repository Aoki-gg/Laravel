<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use App\Http\Requests\MatriculaRequest;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Matricula::with(["aluno", "disciplina"])->get();

        return view("matricula.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("matricula.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatriculaRequest $request)
    {
        Matricula::create($request->validated());
        return redirect()->route("matricula.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matricula = Matricula::find()->where("aluno_id", $id);

        if(isset($matricula)){
            $matricula->delete()->where("aluno_id", $id);
            return redirect()->route("matricula.index");
        }
    }
}
