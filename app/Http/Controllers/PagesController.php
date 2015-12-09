<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function juridico()
    {
        return view('pages.juridico');
    }

    public function empleadas_hogar()
    {
        return view('pages.empleadas_hogar');
    }

    public function herencia()
    {
        return view('pages.herencia');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function terms_and_conditions()
    {
        return view('pages.terms_and_conditions');
    }

    public function legal()
    {
        return view('pages.legal');
    }
}
