<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Matricula;
use App\Http\Requests\MatriculaRequest;
use Illuminate\Support\Facades\Gate;
use App\Services\MatriculaService;

class MatriculaController extends Controller
{
    public function __construct(protected MatriculaService $service)
    {
    }

    public function audit(string $id)
    {
        $matricula = $this->service->find($id);
        Gate::authorize('delete', $matricula);
        if (isset($matricula)) {
            $data = $this->service->audit($id);
            return view('matricula.audit', compact(['data']));
        }
        return "<h1>Não encontrado!</h1>";
    }

    public function index()
    {
        Gate::authorize('viewAny', Matricula::class);
        $data = $this->service->all(
            ['aluno', 'disciplina'],
            [],
            'aluno_id'
        );
        if (request()->is('api/*'))
            return response()->json($data);

        return view('matricula.index', compact(['data']));
    }


    public function create()
    {
        Gate::authorize('create', Matricula::class);
        if (request()->is('api/*'))
            return response()->json(['message' => 'Create!']);
        return view('matricula.create');
    }
    public function store(MatriculaRequest $request)
    {
        Gate::authorize('create', Matricula::class);
        $matricula = $this->service->store($request->validated());
        if ($request->is('api/*'))
            return response()->json($matricula, 201);

        return redirect()->route('matricula.index');
    }
    public function show(string $id)
    {
        $matricula = $this->service->find($id);
        Gate::authorize('view', $matricula);
        if (isset($matricula)) {
            if (request()->is('api/*'))
                return response()->json($matricula);

            return view('matricula.show', compact(['matricula']));
        }
        return "<h1>matricula não encontrado!</h1>";
    }

    public function edit(string $id)
    {
        $matricula = $this->service->find($id);
        Gate::authorize('update', $matricula);
        if (isset($matricula)) {
            if (request()->is('api/*'))
                return response()->json($matricula);

            return view('matricula.edit', compact(['matricula']));
        }
        return "<h1>matricula não encontrado!</h1>";
    }
    public function update(MatriculaRequest $request, string $id)
    {
        $matricula = $this->service->find($id);
        Gate::authorize('update', $matricula);
        if (isset($matricula)) {

            $updated = $this->service->update($request->validated(), $id);
            if (request()->is('api/*'))
                return response()->json($updated);
            return redirect()->route('curso.index');
        }
        return "<h1>matricula não encontrado!</h1>";
    }
    public function destroy(string $id)
    {
        $matricula = $this->service->find($id);
        Gate::authorize('delete', $matricula);
        if (isset($matricula)) {
            $this->service->remove($id);
            
            if (request()->is('api/*'))
                return response()->json(
                    ['message' => 'matricula removido com sucesso.']
                );

            return redirect()->route('matricula.index');
        }
        return "<h1>matricula não encontrado!</h1>";
    }
}
