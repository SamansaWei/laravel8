<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolboxController extends Controller
{
    public function imageUpload(Request $request){
        $path = Storage::put('/',request->image);

    }
}
