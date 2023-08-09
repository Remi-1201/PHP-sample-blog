<?php

namespace App\Http\Controllers;

// ---1.1 Blogモデルをuseすることで使用できるように定義
use App\Models\Blog; 
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // 1.2 allメソッドを利用して、Blogモデルの全てのレコードを取得
        $blogs = Blog::all();
        // 1.3 viewヘルパを使ってビューを返しています     
        return view('blogs.index', compact('blogs')); 
        // 第一引数としてresponces.viewsディレクトリ内のblogs/indexを指定
        // indexに対応するビューが呼び出されます   
        // 第二引数としてビューで使用するデータの配列compact('blogs')を指定
    }
}
