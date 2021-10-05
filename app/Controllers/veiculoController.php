<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;
use App\Models\Veiculo;

class veiculoController extends Controller {
    
    public function index() {
        $modelo = new Veiculo();
        $modelos = $modelo->getAll();

        $this->view('veiculolist', ['modelos' => $modelos]);
    }

    public function name(Request $request) {
        $modeloName = $request->get();
        $modelovv = new Veiculo();
        $modelov = $modelovv->getBy(['Descricao' => $modeloName]);

        $this->view('veiculomodel', ['modelos' => $modelov]);
    }
}
