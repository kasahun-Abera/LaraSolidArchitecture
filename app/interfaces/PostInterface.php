<?php

namespace App\Interfaces;

interface PostInterface
{
    public function getPosts();
    public function getPostById($PostId);
    public function deletePost($PostId);
    public function createPost(array $PostDetails);
    public function updatePost($PostId, array $newDetails);
}
