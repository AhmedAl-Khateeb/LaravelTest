<?php

namespace App\Http\Controllers;

use App\DTOs\PostDTO;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function showall()
    {
        $posts = $this->postService->showall();
        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('admin.posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]);


        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->save();

        return redirect()->route('post.showall')->with('Add', 'Category added successfully.');

    }

    public function showById($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.show',compact('post'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('post.showall')->with('Message','Updated');
    }

    public function destroy($id)
    {
        $this->postService->deletePost($id);
        return redirect()->route('post.showall')->with('Message',"Deleted Successfully");
    }
}
