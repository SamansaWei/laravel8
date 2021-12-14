<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

use function PHPUnit\Framework\returnSelf;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    // public function hallo()
    // {
    //     $name = 'Sam';
    //     $age ='20';
    //     return view('hello', compact('name','age'));
    // }

    public function news()
    {
        // $news = DB::table('news')->get();
        $news = News::get();
        // dd($news);
        return view('news',compact('news'));
    }


    public function newsContent($id)
    {
    // 第一種方法$news = DB::table('news')->find($id);

        $news = DB::table('news')->find($id);

        return view('news-content',compact('news'));
    
    }

    public function ceeateNews(){


        // 最基礎的方法 以後就不會用了
        // DB::table('news')->insert([
        //     'title'=>'疫後衝國內旅遊、部長壯圍推觀光 沙丘地景藝域開展、推「劵戀東北角」搶商機',
        //     'date'=>'2021-12-10',
        //     'content'=>'疫情導致旅遊活動大幅減少，尤其觀光產業受傷嚴重！根據交通部觀光局統計，109年國人國內旅遊總旅次為1.4億旅次，較108年大減15.5%，平均每人國內旅遊6.7次，也減少1.3次，創下九年來新低紀錄！

        //     由交通部觀光局東北角暨宜蘭海岸國家風景區管理處(以下簡稱管理處)、宜蘭縣政府、壯圍鄉公所聯合舉辦的「2021壯圍沙丘地景藝術節」，於今天（19日）創「藝」登場！目前疫情趨緩，為了提升國內旅遊市場，交通部長王國材、立法委員陳歐珀辦公室團隊、觀光局長張錫聰、宜蘭縣長林姿妙、壯圍鄉長沈清山等來賓出席開展儀式，行銷宜蘭在地觀光，管理處並藉此邀集大東北角觀光圈業者，共同推出「劵戀東北角」優惠搶攻商機！',
        //     'image_url'=>'https://images.chinatimes.com/newsphoto/2020-09-17/656/20200917001809.jpg',
        // ]);


                News::create([
                    'title'=>'疫後衝國內旅遊、部長壯圍推觀光 沙丘地景藝域開展、推「劵戀東北角」搶商機',
                    'date'=>'2021-12-10',
                    'content'=>'疫情導致旅遊活動大幅減少，尤其觀光產業受傷嚴重！根據交通部觀光局統計，109年國人國內旅遊總旅次為1.4億旅次，較108年大減15.5%，平均每人國內旅遊6.7次，也減少1.3次，創下九年來新低紀錄！

                    由交通部觀光局東北角暨宜蘭海岸國家風景區管理處(以下簡稱管理處)、宜蘭縣政府、壯圍鄉公所聯合舉辦的「2021壯圍沙丘地景藝術節」，於今天（19日）創「藝」登場！目前疫情趨緩，為了提升國內旅遊市場，交通部長王國材、立法委員陳歐珀辦公室團隊、觀光局長張錫聰、宜蘭縣長林姿妙、壯圍鄉長沈清山等來賓出席開展儀式，行銷宜蘭在地觀光，管理處並藉此邀集大東北角觀光圈業者，共同推出「劵戀東北角」優惠搶攻商機！',
                    'image_url'=>'https://images.chinatimes.com/newsphoto/2020-09-17/656/20200917001809.jpg',
                ]);
                
                // 面這個寫法也可以但是白名單功能就不見了
                // $news = new News;
                // $news->title ='疫後衝國內旅遊、部長壯圍推觀光 沙丘地景藝域開展、推「劵戀東北角」搶商機';
                // $news->date ='2021-12-10';
                // $news->content ='疫情導致旅遊活動大幅減少，尤其觀光產業受傷嚴重！根據交通部觀光局統計，109年國人國內旅遊總旅次為1.4億旅次，較108年大減15.5%，平均每人國內旅遊6.7次，也減少1.3次，創下九年來新低紀錄！

                // 由交通部觀光局東北角暨宜蘭海岸國家風景區管理處(以下簡稱管理處)、宜蘭縣政府、壯圍鄉公所聯合舉辦的「2021壯圍沙丘地景藝術節」，於今天（19日）創「藝」登場！目前疫情趨緩，為了提升國內旅遊市場，交通部長王國材、立法委員陳歐珀辦公室團隊、觀光局長張錫聰、宜蘭縣長林姿妙、壯圍鄉長沈清山等來賓出席開展儀式，行銷宜蘭在地觀光，管理處並藉此邀集大東北角觀光圈業者，共同推出「劵戀東北角」優惠搶攻商機！';
                // $news->image_url ='https://images.chinatimes.com/newsphoto/2020-09-17/656/20200917001809.jpg';




        return 'success';
    }

    public function updateNews($id){
        News::find($id)->update([
            'title'=>'1111',
            'date'=>'2021-12-10',
            'content'=>'2222',
            'image_url'=>'https://images.chinatimes.com/newsphoto/2020-09-17/656/20200917001809.jpg',
        ]);

        return 'updatesuccess';
    }

    public function destroyNews($id){
        News::find($id)->delete([
        ]);

        return 'destroysuccess';
    }


    public function contact(Request $request){

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return redirect('/');
    }



    public function addNews(){
        return view('news-add');
    }


    public function addAnter(Request $request){
        News::create([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
            'image_url' => $request->image_url,
        ]);
        // News::create([$request->all()]);
        return redirect('/news');
    }




}
