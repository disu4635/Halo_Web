<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use App\Http\Controllers\Controller;

class CovenantController extends Controller {
    public function mostrarJefeMaestro(){
        return view('jefe_maestro');
    }

    public function mostrarNoble6(){
        return view('noble6');
    }
};

?>
