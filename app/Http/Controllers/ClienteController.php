<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes); // Corrigido: 'clientes'
    }
    
    public function home()
{
    $cliente = Cliente::latest()->first(); // ou Cliente::first(), se preferir o primeiro cliente
    return view('cliente.home', compact('cliente'));

}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index'); // Corrigido: 'clientes.index'
    }

    /**
     * Display the specified resource.
     */
    public function show($id) // Alterei para receber o ID diretamente
    {
        // Busca o cliente pelo ID e trata caso não encontre
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente')); // Passa os dados do cliente para a view
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente.edit')->with('cliente', $cliente); // Corrigido: 'cliente.edit'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index'); // Corrigido: 'clientes.index'
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index'); // Corrigido: 'clientes.index'
    }
}
