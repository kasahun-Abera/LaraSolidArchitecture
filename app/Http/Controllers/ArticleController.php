<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\interfaces\ArticleInterface;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private ArticleInterface $articleORM;
    public function __construct(ArticleInterface $articleORM)
    {
        $this->articleORM = $articleORM;
    }

    public function index()
    {
        //
        $article = $this->articleORM->getArticles();
        return response()->json([
            'data' => $article
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //
        $alldata =  $request->all();
        $article = $this->articleORM->createArticle($alldata);
        return response()->json([
            'article' => $article
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
        return response()->json([
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
        return response()->json([
            'article' => $article->delete()
        ]);
    }
}
