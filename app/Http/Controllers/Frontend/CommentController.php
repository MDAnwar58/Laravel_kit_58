<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'code_id' => 'required|integer',
            'name' => 'required|max:255',
            'msg' => 'required',
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->code_id = $request->code_id;
        $comment->name = $request->name;
        $comment->msg = $request->msg;
        $comment->save();

        return response()->json([
           'status' => 200,
           'success' => 'Your Comment Is Send Successfully!'
        ]);
    }

    public function storeReplay(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'code_id' => 'required|integer',
            'p_id' => 'required|integer',
            'name' => 'required|max:255',
            'msg' => 'required',
        ]);

        $replay = New Comment();
        $replay->user_id = $request->user_id;
        $replay->code_id = $request->code_id;
        $replay->name = $request->name;
        $replay->msg = $request->msg;
        $replay->p_id = $request->p_id;
        $replay->save();

        return response()->json([
            'status' => 200,
            'success' => 'Your Replay Is Send Successfully!'
        ]);
    }
}
