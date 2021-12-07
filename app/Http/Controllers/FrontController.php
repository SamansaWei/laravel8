<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hallo()
    {
        $name = 'Sam';
        $age ='20';
        return view('hello', compact('name','age'));
    }


}
