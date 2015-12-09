<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function autonomos()
    {
        return view('pages.empresas.autonomos');
    }

    public function laboral()
    {
        return view('pages.empresas.laboral');
    }

    public function sociedades()
    {
        return view('pages.empresas.sociedades');
    }

    public function otras_organizaciones()
    {
        return view('pages.empresas.otras_organizaciones');
    }
}
