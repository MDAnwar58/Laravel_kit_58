<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class BCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $comments = Comment::where('p_id', 0)->orderBy('created_at', 'DESC')->paginate(5);
        return view('backend.comment.index', compact('comments'));
    }
    public function show($id)
    {
        $comment = Comment::findOrFail(intval($id));
        $comment->is_read = 1;
        $comment->save();

        return view('backend.comment.show', compact('comment'));
    }

    public function replay(Request $request)
    {
        $request->validate([
            'admin_id' => 'required|integer',
            'code_id' => 'required|integer',
            'p_id' => 'required|integer',
            'name' => 'required|max:255',
            'msg' => 'required',
        ]);

        $replay = New Comment();
        $replay->admin_id = $request->admin_id;
        $replay->code_id = $request->code_id;
        $replay->name = $request->name;
        $replay->msg = $request->msg;
        $replay->p_id = $request->p_id;
        $replay->is_read = 1;
        $replay->save();

//        return redirect()->route('admin.comment.show', $replay->p_id)->with('success', 'Admin Replay Is Added Successfully!');
        return response()->json([
            'status' => 200,
            'success' => 'Your Replay Is Send Successfully!'
        ]);
    }

    public function destory($id)
    {
        $comment = Comment::findOrFail(intval($id));

        if ($comment->child->count() > 0) {
            foreach ($comment->child as $reply) {
                $reply->delete();
            }
            $comment->delete();

            return redirect()->route('admin.comment')->with('success', 'Comment has been deleted successfully');
        }else {
            $comment->delete();

            return redirect()->route('admin.comment')->with('success', 'Comment has been deleted successfully');
        }
    }
    public function destoryReplay($id)
    {
        $comment = Comment::findOrFail(intval($id));

            $p_id = $comment->p_id;
            $comment->delete();

            return redirect()->route('admin.comment.show', $p_id)->with('success', 'Replay has been deleted successfully');
    }
}
