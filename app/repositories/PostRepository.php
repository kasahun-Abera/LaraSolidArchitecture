<?php

namespace App\Repositories;

use App\interfaces\PostInterface;
use App\Models\Post;

class PostRepository implements PostInterface
{
    public function getPosts()
    {
        return Post::all();
    }

    public function getPostById($PostId)
    {
        return Post::findOrFail($PostId);
    }

    public function deletePost($PostId)
    {
        Post::destroy($PostId);
    }

    public function createPost(array $PostDetails)
    {
        return Post::create($PostDetails);
    }

    public function updatePost($PostId, array $newDetails)
    {
        return Post::whereId($PostId)->update($newDetails);
    }

}
