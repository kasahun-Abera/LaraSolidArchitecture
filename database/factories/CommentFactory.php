<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    public $articles;
    public $posts;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'body' => $this->faker->sentence,
            'commentable_type' => ($commentable = $this->getCommmentableClass()) instanceof Post ? Post::class : Article::class,
            'commentable_type' => $commentable->id,
        ];
    }
    private function getCommmentableClass() : Article|Post
    {

        $articles = Article::all();
        $posts = Post::all();
        $article = $articles->random();
        $post = $posts->random();

        return $this->faker->randomElement([$post, $article]);
    }
}
