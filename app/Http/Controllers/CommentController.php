<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Interfaces\CommentInterface;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private CommentInterface $commentORM;
    public function __construct(CommentInterface $commentORM)
    {
        $this->commentORM = $commentORM;
    }

    public function index()
    {
        //
        return response()->json(['data' => $this->commentORM->getComments()], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        //
        return response()->json(['data' => $this->commentORM->createComment($request->all())], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return response()->json(['data' => $this->commentORM->getCommentById($id)], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, $id)
    {
        //
        return response()->json(['data' => $this->commentORM->updateComment($id , $request->all())], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        return response()->json(['data' => $this->commentORM->deleteComment($id)], 200);
    }
}
