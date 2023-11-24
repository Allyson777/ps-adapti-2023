<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    private $cursos;
    public function __construct(Curso $curso){
        $this->cursos = $curso;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos= $this->cursos->all();
        return view('admin.curso.index',compact('cursos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.curso.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        $data = $request->all();
        $this->cursos->create($data);
        return redirect()->route('curso.index')->with('success','Curso adicionado com sucesso.'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso= $this->cursos->find($id);
        return response()->json($curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso= $this->cursos->find($id);
        return view('admin.curso.crud',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CursoRequest $request, $id)
    {
        $data = $request->all();
        $curso = $this->cursos->find($id);
        $curso->update($data);
        return redirect()->route('curso.index')->with('success','atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $curso= $this->cursos->find($id);
         $curso->delete();
         return redirect()->route('curso.index')->with('success','Curso deletado com Sucesso.');
    }
}
