<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TrafficsController extends Controller
{
    public function transferencia_de_vehiculos()
    {
        return view('pages.traficos.transferencia_de_vehiculos');
    }

    public function informe_trafico()
    {
        return view('pages.traficos.informe_trafico');
    }

    public function otras_gestiones()
    {
        return view('pages.traficos.otras_gestiones');
    }

    public function documentacion()
    {
        return view('pages.traficos.documentacion');
    }
}
