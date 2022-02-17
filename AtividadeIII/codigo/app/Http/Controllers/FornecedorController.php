<?php

namespace App\Http\Controllers;

use App\Models\FornecedorModel;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function create(){
        $fornecedor = FornecedorModel::all();
        return view('fornecedor.create');
    }
    public function store(){
        return view('fornecedor.store');
    }
}
