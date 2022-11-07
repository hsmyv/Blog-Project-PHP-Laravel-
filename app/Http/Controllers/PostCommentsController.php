<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;


class PostCommentsController extends Controller
{
    public function store($language, Post $post)
       {

           request()->validate([
          'body' => 'required'
       ]);

        $post->comments()->create([

           'user_id' => request()->user()->id,
           'body' => request('body')
       ]);

            return back();
        }


    //  $post->addComment([
    //    'body' => request('body'),
    //    'parent_id' => request('parent_id', null)
    //]);



    public function replyStore($language, Post $post,Request $request)
    {



           $reply = new Comment();
            $reply->body = $request->get('comment_body');
            $reply->author()->associate($request->user());
            $reply->parent_id = $request->get('comment_id');
            $post = Post::find($request->get('post_id'));
            $reply->commentable_user = $request->get('commentable_user');
            $post->comments()->save($reply);

            return back();
    }

    public function editcomment($language, Comment $comment){
        $attributes = request()->validate([
            'body' => 'required'
        ]);

        $comment->update($attributes);
        return redirect()->route("getpostslug", $comment->post->slug)->with('success' ,'Your comment has been edited successfully');
    }

    public function destroycomment($language, Comment $comment){
        $comment->delete();
        return back()->with('success', 'Your comment has been deleted successfully');
    }

    public function showcommentedit($language, Comment $comment){
        return view('webpage.commentedit', ['comment' => $comment]);
    }
}
