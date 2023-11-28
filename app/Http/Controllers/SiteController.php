<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest;
use App\Http\Requests\SiteRequest;
use App\Models\Aluno;
use App\Models\Curso;

class SiteController extends Controller
{

    private $alunos;
    public function __construct(Aluno $aluno)
    {
        $this->alunos = $aluno;
    }
    public function index()
    {
        $alunos = $this->alunos->paginate(16);
        return view('site.index', compact('alunos'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function search(SiteRequest $request)
    {
        $busca = $request["search"];
        $alunos = $this->alunos
            ->where("nome", "like", "%$busca%")
            ->orWhereHas("curso", function ($query) use ($busca) {
                $query->where("curso", "like", "%$busca%");
            })
            ->paginate(16);
        return view("site.index", compact("alunos"));
    }
}
