<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(){
        $clientes = ClienteModel::all();
        // echo $clientes;
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(){
        return view('clientes.store');
    }
}
