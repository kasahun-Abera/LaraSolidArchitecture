<?php

namespace App\Interfaces;

interface ArticleInterface
{
    public function getArticles();
    public function getArticleById($ArticleId);
    public function deleteArticle($ArticleId);
    public function createArticle(array $ArticleDetails);
    public function updateArticle($ArticleId, array $newDetails);
}
