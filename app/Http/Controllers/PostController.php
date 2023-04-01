<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts', [
            "title" => "News",
            "title" => "All Posts",
            // "posts" => Post::all()
            //"posts" => Post::with(['user','category'])->latest()->get()
            "posts" => Post::latest()->filter(request(['search','category']))->get()
        ]);
    }
    
    function showCreateForm()
    {
        return view('create-post');
    }
    function storeNewPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $incomingFields['title'] = strip_tags(($incomingFields['title']));
        $incomingFields['body'] = strip_tags(($incomingFields['body']));
        $incomingFields['user_id'] = auth()->id();
        $newPost = Post::create($incomingFields);
        return redirect("/post/{$newPost->id}")->with('success', 'New Post Successfuly Created');
    }
    function viewSinglePost(Post $post)
    {
        $ourHTML = strip_tags(Str::markdown($post->body), '<p><ul><li><strong><em><h3><br>'); //allow this tg read in view selain ini disalllow
        $post['body'] =  $ourHTML;
        return view('single-post', ['post' => $post]);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/profile/' . auth()->user()->username)->with('success', 'Post successfully deleted.');
    }

    public function showEditForm(Post $post)
    {
        return view('edit-post', ['post' => $post]);
    }

    public function actuallyUpdate(Post $post, Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $post->update($incomingFields);
        return back()->with('success', 'Post successfully updated.');
    }

    public function search($term)
    {
        $posts = Post::search($term)->get();
        $posts->load('user:id,username,avatar');
        return $posts;
    }
}
