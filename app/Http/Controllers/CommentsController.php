<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Gradebook;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $gradebook_id)
    {
        $this->validate(request(), Comment::STORE_RULES);

        $gradebook = Gradebook::find($gradebook_id);

        $comment = new Comment;
        $comment->content = request('content');

        if(!auth()->user()){
            return back();
        }

        $comment->user_id = auth()->user()->id;
        $comment->gradebook_id = $gradebook_id;
        $comment->save();

        // return back();
        return $comment;
    }
}
