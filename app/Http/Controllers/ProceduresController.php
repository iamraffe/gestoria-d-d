<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProceduresController extends Controller
{
    public function alquiler_ivima()
    {
        return view('pages.tramites.alquiler_ivima');
    }

    public function certificados()
    {
        return view('pages.tramites.certificados');
    }

    public function creacion_web()
    {
        return view('pages.tramites.creacion_web');
    }

    public function creacion_marcas()
    {
        return view('pages.tramites.creacion_marcas');
    }

    public function declaracion_renta()
    {
        return view('pages.tramites.declaracion_renta');
    }
}
