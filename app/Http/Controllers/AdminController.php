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

        return view('admin.index', [
            'articles' => $articles
        ]);
    }

    public function add(Request $request)
    {

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'article.title' => 'min:1|max:100',
                'article.author' => 'min:1|max:100',
                'article.title' => 'min:1'
            ],[],[
                'article.title' => '标题',
                'article.author' => '作者',
                'article.content' => '内容'
            ]);

            $data = $request->input('article');
            $article = new Article();
            $article->title = $data['title'];
            $article->author = $data['author'];
            $article->content = $data['content'];

            if ($article->save()) {
                return redirect('admin/index')->with('success','创建成功');
            } else {
                return redirect()->back();
            }

        }

        return view('admin.add');
    }

    public function modify(Request $request,$id)
    {
        $article = Article::find($id);

        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'article.title' => 'min:1|max:100',
                'article.author' => 'min:1|max:100',
                'article.title' => 'min:1'
            ], [], [
                'article.title' => '标题',
                'article.author' => '作者',
                'article.content' => '内容'
            ]);

            $data = $request->input('article');
            $article->title = $data['title'];
            $article->author = $data['author'];
            $article->content = $data['content'];

            if ($article->save()) {
                return redirect('admin/index')->with('success', '修改成功');
            } else {
                return redirect()->back();
            }

        }

        return view('admin.modify', ['article' => $article]);

    }

    public function delete($id)
    {

        $article = Article::find($id);

        if ($article->delete()) {
            return redirect('admin/index')->with('success', '删除成功');
        } else {
            return redirect('admin/index')->with('error', '删除失败');
        }
    }




}