<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    // // 設定條件要有哪些才可以進去資料(白名單)
    // // 可以刪掉一個''理的條件 這樣資料就近不去了
    // 比較常使用這個
    protected $fillable = ['title','date','content','image_url'];

    // 設定有哪些條件步可以進去資料(黑名單)
    // 擋住''裡面設定到的資料
    // protected $guarded = [];
}
