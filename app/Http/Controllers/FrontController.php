<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // public function hallo()
    // {
    //     $name = 'Sam';
    //     $age ='20';
    //     return view('hello', compact('name','age'));
    // }

    public function news()
    {
        $news = DB::table('news')->get();
        return view('news',compact('news'));
    }


    public function newsContent($id)
    {
    // 第一種方法$news = DB::table('news')->find($id);

        $news = DB::table('news')->find($id);

        return view('news-content',compact('news'));
    
    }






}
