<?php
namespace App\Http\Controllers;
use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Support\Facades\Gate;
use App\Services\AlunoService;

class AlunoController extends Controller
{
    public function __construct(protected AlunoService $service)
    {
    }

    public function audit(string $id)
    {
        $aluno = $this->service->find($id);
        Gate::authorize('delete', $aluno);
        if (isset($aluno)) {
            $data = $this->service->audit($id);
            return view('aluno.audit', compact(['data']));
        }
        return "<h1>Não encontrado!</h1>";
    }

    public function index()
    {
        Gate::authorize('viewAny', Aluno::class);
        $data = $this->service->all(
            ['curso'],
            [],
            'nome'
        );
        if (request()->is('api/*'))
            return response()->json($data);

        return view('aluno.index', compact(['data']));
    }


    public function create()
    {
        Gate::authorize('create', Aluno::class);
        if (request()->is('api/*'))
            return response()->json(['message' => 'Create!']);
        return view('aluno.create');
    }
    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);
        $aluno = $this->service->store($request->validated());
        if ($request->is('api/*'))
            return response()->json($aluno, 201);

        return redirect()->route('aluno.index');
    }
    public function show(string $id)
    {
        $aluno = $this->service->find($id);
        Gate::authorize('view', $aluno);
        if (isset($aluno)) {
            if (request()->is('api/*'))
                return response()->json($aluno);

            return view('aluno.show', compact(['aluno']));
        }
        return "<h1>aluno não encontrado!</h1>";
    }

    public function edit(string $id)
    {
        $aluno = $this->service->find($id);
        Gate::authorize('update', $aluno);
        if (isset($aluno)) {
            if (request()->is('api/*'))
                return response()->json($aluno);

            return view('aluno.edit', compact(['aluno']));
        }
        return "<h1>aluno não encontrado!</h1>";
    }
    public function update(AlunoRequest $request, string $id)
    {
        $aluno = $this->service->find($id);
        Gate::authorize('update', $aluno);
        if (isset($aluno)) {

            $updated = $this->service->update($request->validated(), $id);
            if (request()->is('api/*'))
                return response()->json($updated);
            return redirect()->route('aluno.index');
        }
        return "<h1>aluno não encontrado!</h1>";
    }
    public function destroy(string $id)
    {
        $aluno = $this->service->find($id);
        Gate::authorize('delete', $aluno);
        if (isset($aluno)) {
            $this->service->remove($id);
            
            if (request()->is('api/*'))
                return response()->json(
                    ['message' => 'aluno removido com sucesso.']
                );

            return redirect()->route('aluno.index');
        }
        return "<h1>aluno não encontrado!</h1>";
    }
}
