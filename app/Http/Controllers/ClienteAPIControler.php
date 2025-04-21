<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteAPIController extends Controller
{
    // GET /api/clientes - Lista todos os clientes
    public function index()
    {
        return response()->json(Cliente::all(), 200);
    }

    // POST /api/clientes - Cria um novo cliente
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    // GET /api/clientes/{id} - Mostra um cliente específico
    public function show(string $id)
    {
        $cliente = Cliente::find($id);

        if ($cliente) {
            return response()->json($cliente, 200);
        }

        return response()->json(['message' => 'Cliente não encontrado'], 404);
    }

    // PUT /api/clientes/{id} - Atualiza os dados de um cliente
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);

        if ($cliente) {
            $cliente->update($request->all());
            return response()->json($cliente, 200);
        }

        return response()->json(['message' => 'Cliente não encontrado'], 404);
    }

    // DELETE /api/clientes/{id} - Remove um cliente
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);

        if ($cliente) {
            $cliente->delete();
            return response()->json(['message' => 'Cliente removido com sucesso'], 200);
        }

        return response()->json(['message' => 'Cliente não encontrado'], 404);
    }
}
