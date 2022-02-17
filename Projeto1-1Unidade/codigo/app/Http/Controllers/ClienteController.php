<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index(){;
        return view('welcome');
    }

    public function show(){
        $clientes = ClienteModel::all();
        $id = ClienteModel::all();
        $nome = ClienteModel::all();
        $debito = ClienteModel::all();
        $descricao = ClienteModel::all();
        return view('clientes.show', [
            'clientes'=>$clientes,
            "clientes.id"=>$id,
            'clientes.nome'=>$nome,
            'clientes.debito'=>$debito,
            'clientes.descricao'=>$descricao,

        ]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $clientes = new ClienteModel();
        $clientes->id = $request->id;
        $clientes->nome = $request->nome;
        $clientes->debito = $request->debito;
        $clientes->descricao = $request->descricao;
        $clientes->save();
        return redirect('clienteshow');
        
    }
}
