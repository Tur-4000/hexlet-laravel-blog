<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new \App\Article();

        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
//        dd(__METHOD__, $request->all());

        $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000',
        ]);

        $article = new Article();
        $article->fill($request->all());
        $result = $article->save();

        if ($result) {
            return redirect()
                ->route('articles.index')
                ->with(['success' => 'Новая статья успешно добавлена']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }
}
