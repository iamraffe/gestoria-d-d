<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    // public function contacto()
    // {
    //     return view('pages.contacto');
    // }

    public function terms_and_conditions()
    {
        return view('pages.terms_and_conditions');
    }

    public function legal()
    {
        return view('pages.legal');
    }

    public function contacto(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nombre' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $email = $request->input("email");
        $name = $request->input("nombre");
        Mail::queue('emails.contact',
                    $request->except('submit'),
                   function($message) use ($email, $name)
                    {
                      $message->from($email, $name);
                      $message->to('raffe90@gmail.com', 'Gestoria DyD')->subject('Contacto [WEB]');
                    });
        return back();
    }
}
