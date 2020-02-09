<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{

    public function index()
    {
        return Comment::all();
    }


    public function approved(Comment $comment)
    {
        $comment->approved = 1;
        $comment->save();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return ['message' => __('messages.delete_success')];
    }
}
