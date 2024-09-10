<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all(); // Obter todos os testes
        return view('tests.index', compact('tests')); // Retornar a view com a lista de testes
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tests.create'); // Retornar a view para criar um novo teste
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
        Test::create($request->validated()); // Criar um novo teste
        return redirect()->route('tests.index')->with('success', 'Teste criado com sucesso.'); // Redirecionar com mensagem de sucesso
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return view('tests.show', compact('test')); // Retornar a view para mostrar um teste específico
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('tests.edit', compact('test')); // Retornar a view para editar um teste
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
        $test->update($request->validated()); // Atualizar o teste
        return redirect()->route('tests.index')->with('success', 'Teste atualizado com sucesso.'); // Redirecionar com mensagem de sucesso
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete(); // Excluir o teste
        return redirect()->route('tests.index')->with('success', 'Teste excluído com sucesso.'); // Redirecionar com mensagem de sucesso
    }
}
