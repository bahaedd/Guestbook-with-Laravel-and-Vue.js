<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturesController extends Controller
{
    public function index()
    {
        return view('signatures.index');
    }

    public function create()
    {
        return view('signatures.sign');
    }
}
