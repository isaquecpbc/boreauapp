<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    // 
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        // return $this->cliente->all();
        return $cliente = DB::table('clientes')
                        ->rightJoin('dividas', 'clientes.id', '=', 'dividas.cliente')
                        ->join('empresas', 'empresas.id', '=', 'dividas.empresa')
                        ->join('enderecos', 'enderecos.id', '=', 'clientes.endereco')
                        ->join('cidades', 'cidades.id', '=', 'enderecos.cidade')
                        ->join('estados', 'estados.id', '=', 'cidades.estado')
                        ->select('clientes.*', 'dividas.divida', 'empresas.empresa', 'enderecos.rua', 'enderecos.logradouro', 'cidades.cidade', 'estados.uf')
                        ->get();
    }
 
    public function show($id)
    {
        // $cliente = $this->cliente->find($id);
        $cliente = DB::table('clientes')
                ->rightJoin('dividas', 'clientes.id', '=', 'dividas.cliente')
                ->join('empresas', 'empresas.id', '=', 'dividas.empresa')
                ->join('enderecos', 'enderecos.id', '=', 'clientes.endereco')
                ->join('cidades', 'cidades.id', '=', 'enderecos.cidade')
                ->join('estados', 'estados.id', '=', 'cidades.estado')
                ->where('clientes.id', $id)
                ->select('clientes.*', 'dividas.divida', 'empresas.empresa', 'enderecos.rua', 'enderecos.logradouro', 'cidades.cidade', 'estados.uf')
                ->get()
                ->first();
        
        return response()->json($cliente);
    }
}
