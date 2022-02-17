<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function index(){
        $clientes = ClienteModel::all();
        return view('clientes/index', ['clientes' => $clientes]);
    }

    public function create(){
        return view('clientes/create');
    }

    public function add(ClienteRequest $request){
        $cliente = new ClienteModel();
        $cliente = $cliente->create($request->all());
        return redirect('clientes/index');
    }

    public function edit($id){
        $cliente = ClienteModel::findOrFail($id);
        return view('clientes/create', ['cliente' => $cliente]);
    }

    public function update($id, Request $request){
        $cliente = ClienteModel::findOrFail($id);
        $cliente->update($request->all());
        return redirect('clientes/index');
    }

    public function delete($id){
        $cliente = ClienteModel::findOrFail($id);
        $cliente->delete();
        return redirect('clientes/index');
    }
}
