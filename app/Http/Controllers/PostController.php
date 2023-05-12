<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\interfaces\PostInterface;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private PostInterface $postORM;
    public function __construct(PostInterface $postORM)
    {
        $this->postORM = $postORM;
    }

    public function index()
    {
        //
        $posts = $this->postORM->getPosts();
        return response()->json([ 'data' => $posts ], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        $data = $request->all();
        $post = $this->postORM->createPost($data);
        return response()->json([ 'data' => $post ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return response()->json(['data' => $this->postORM->getPostById($id)], 200) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
        $data = $request->all();
        $post = $this->postORM->updatePost($post->id, $data);
        return response()->json(['data' => $post], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
          return response()->json(['data' => $this->postORM->deletePost($id)], 200);
    }
}
