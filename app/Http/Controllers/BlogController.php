<?php

namespace App\Http\Controllers;

// ---1.1 Blogモデルをuseすることで使用できるように定義
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

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

    // 2.1 createアクション
    public function create()
    {
        return view('blogs.create');
    }
    // 2.2 storeアクション
    // public function store(Request $request)
    public function store(Request $request, Blog $blog)
    {
        // Blog::create($request->all());
        // $blog = new Blog($request->all());
        $blog->fill($request->all());
        $blog->save();

        // redirectを使って、保存後のページの遷移先を定義
        // return redirect()->route('blogs.index')->with('notice', 'ブログを作成しました'); 

        session()->flash('notice', 'ブログを作成しました');
        return redirect()->route('blogs.index');
    }

    // public function show($id)
    public function show(Blog $blog)
    {
        // $blog = Blog::find($id);
        // $params = [
        //     'id' => $blog->id,
        //     'title' => $blog->title,
        //     'content' => $blog->content,
        // ];
        // return view('blogs.show', ['blog' => (object)$params]);
        return view('blogs.show', compact('blog'));
    }

    // public function edit($id)
    public function edit(Blog $blog)
    {
        // $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }
    
    // 送信されたデータを$requestで受け取ります
    // public function update(Request $request, $id)
    public function update(Request $request, Blog $blog)
    {
        // 更新するレコードをfindで取得し、
        // $requestで受けとった値を代入
        // $blog = Blog::find($id);
        // $blog->title = $request->title;
        // $blog->content = $request->content;
        $blog->fill($request->all());
        $blog->save();
        return redirect()->route('blogs.show', $blog)->with('notice', 'ブログを更新しました');
    }

    public function delete(Blog $blog)
    {
        // $blog = Blog::find($id);
        return view('blogs.delete', compact('blog'));
    }

    // public function destroy($id)
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('notice', 'ブログを削除しました');    }
}
