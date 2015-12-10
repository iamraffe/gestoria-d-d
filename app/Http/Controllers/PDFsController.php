<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PDFsController extends Controller
{
    public function show($filename)
    {
        // $filename = 'test.pdf';
        $path = public_path().'/pdf/'.$filename.'.pdf';

        return response()->make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; '.$filename,
        ]);
    }
}
