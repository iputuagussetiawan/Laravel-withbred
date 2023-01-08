<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
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
    // public function delete(Post $post)
    // {
    //     if (auth()->user()->cannot('delete', $post)) {
    //         return 'You cannot do that';
    //     }
    //     $post->delete();
    //     return redirect('/profile/' . auth()->user()->username)->with('success', 'Post Succsessfully Deleted');
    // }

    public function delete(Post $post)
    {
        if (auth()->user()->cannot('delete', $post)) {
            return 'You cannot do that';
        }
        $post->delete();

        return redirect('/profile/' . auth()->user()->username)->with('success', 'Post successfully deleted.');
    }
}
