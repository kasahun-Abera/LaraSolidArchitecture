<?php

namespace App\Interfaces;

interface CommentInterface
{
    public function getComments();
    public function getCommentById($CommentId);
    public function deleteComment($CommentId);
    public function createComment(array $CommentDetails);
    public function updateComment($CommentId, array $newDetails);
}
