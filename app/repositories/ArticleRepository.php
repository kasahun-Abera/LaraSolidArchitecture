<?php

namespace App\Repositories;

use App\interfaces\ArticleInterface;
use App\Models\Article;

class ArticleRepository implements ArticleInterface
{
    public function getArticles()
    {
        return Article::all();
    }

    public function getArticleById($ArticleId)
    {
        return Article::findOrFail($ArticleId);
    }

    public function deleteArticle($ArticleId)
    {
        Article::destroy($ArticleId);
    }

    public function createArticle(array $ArticleDetails)
    {
        return Article::create($ArticleDetails);
    }

    public function updateArticle($ArticleId, array $newDetails)
    {
        return Article::whereId($ArticleId)->update($newDetails);
    }

}
