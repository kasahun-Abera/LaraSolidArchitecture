<?php

namespace App\Repositories;

use App\interfaces\CommentInterface;
use App\Models\Comment;

class CommentRepository implements CommentInterface
{
    public function getComments()
    {
        return Comment::all();
    }
    public function getCommentById($CommentId)
    {
        return Comment::findOrFail($CommentId);
    }

    public function deleteComment($CommentId)
    {
        Comment::destroy($CommentId);
    }

    public function createComment(array $CommentDetails)
    {
        return Comment::create($CommentDetails);
    }

    public function updateComment($CommentId, array $newDetails)
    {
        return Comment::whereId($CommentId)->update($newDetails);
    }

}
