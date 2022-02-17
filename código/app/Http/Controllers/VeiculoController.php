<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VeiculoModel;

class VeiculoController extends Controller
{
    //
    public function index() {
        $veiculos = VeiculoModel::all();
        return view('veiculos.index', ['veiculos' => $veiculos]);
    }

    public function create(){
        return view('veiculos.create');
    }

    public function add(VeiculoRequest $request){
        
    }
}
