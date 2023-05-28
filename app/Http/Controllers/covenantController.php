<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use App\Http\Controllers\Controller;

class CovenantController extends Controller {
    public function mostrarInquisidor(){
        return view('inquisidor');
    }

    public function mostrarVerdad(){
        return view('verdad');
    }
};

?>
