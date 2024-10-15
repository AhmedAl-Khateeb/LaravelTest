<?php


namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;

class PostService
{
    public function showAll()
    {
        return Post::all();
    }

    public function showById($id)
    {
        return Post::findOrFail($id);
    }

    public function createPost($data)
    {
        $this->validatePost($data);

        return Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'author' => $data['author'],
        ]);
    }

    public function updatePost($id, $data)
    {
        $this->validatePost($data);
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $data['title'],
            'content' => $data['content'],
            'author' => $data['author'],
        ]);

        return $post;
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }

    protected function validatePost($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
