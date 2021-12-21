<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\returnSelf;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function newsList()
    {
        // $news = DB::table('news')->get();
        $news = News::get();
        // dd($news);
        return view('front.news.list',compact('news'));
    }


    public function newsContent($id)
    {
    // 第一種方法$news = DB::table('news')->find($id);

        $news = DB::table('news')->find($id);

        return view('front.news.content',compact('news'));
    
    }



    public function contact(Request $request){

        $validator = Validator::make(request()->all(), [
        
            'g-recaptcha-response' => 'recaptcha',
            recaptchaFieldName() => recaptchaRuleName()
        ]);
        
        // check if validator fails
        if($validator->fails()) {
            
            return redirect('/')
            ->withErrors($validator)
            ->withInput();


        }

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return redirect('/');
    }


}
