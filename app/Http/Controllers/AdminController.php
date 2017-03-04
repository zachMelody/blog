<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        $articles = Article::paginate(4);

        return view('admin.index', ['articles' => $articles]);
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'max:100|required',
            'author' => 'required|max:100',
            'content' => 'required'
        ], [], [
            'title' => '标题',
            'author' => '作者',
            'content' => '内容'
        ]);

        if (Article::create(request()->all())) {
            return redirect('admin/index')->with('success', '创建成功');
        } else {
            return redirect()->back();
        }
    }

    public function edit(Article $article)
    {

        return view('admin.edit', ['article' => $article]);
    }

    public function update(Request $request,Article $article)
    {

        $this->validate($request, [
            'article.title' => 'required',
            'article.author' => 'required',
            'article.content' => 'required'
        ],[],[
            'article.title' => '标题',
            'article.author' => '作者',
            'article.content' => '内容'
        ]);

        $data = $request->input('article');
        $article->title = $data['title'];
        $article->author = $data['author'];
        $article->content = $data['content'];

        if ($article->save()) {
            return redirect('admin/article')->with('success', '修改成功');
        } else {
            return redirect()->back();
        }
    }

    public function destroy(Article $article)
    {

        if ($article->delete()) {
            return redirect('admin/index')->with('success', '删除成功');
        } else {
            return redirect('admin/index')->with('error', '删除失败');
        }
    }

}