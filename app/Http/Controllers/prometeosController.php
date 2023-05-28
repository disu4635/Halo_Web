<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use App\Http\Controllers\Controller;

class PrometeosController extends Controller {
    public function mostrarDidacta(){
        return view('didacta');
    }

    public function mostrarBibliotecaria(){
        return view('bibliotecaria');
    }
};

?>
