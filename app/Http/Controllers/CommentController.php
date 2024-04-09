<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoomentModel;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'author' => 'required',
            'email' => 'required|email',
            'url' => 'nullable|url',
            'comment-cookies-consent' => 'nullable|in:yes',
        ]);

        $comment = new CoomentModel;
        $comment->comment = $request->input('comment');
        $comment->author = $request->input('author');
        $comment->email = $request->input('email');
        $comment->url = $request->input('url');
        $comment->save();

        if ($request->input('comment-cookies-consent') === 'yes') {
            $formData = [
                'author' => $request->input('author'),
                'email' => $request->input('email'),
                'url' => $request->input('url'),
            ];
            session()->put('commentFormData', $formData);
        }

        return back()->with('success', 'Your comment has been submitted successfully.');
    }

    public function delete()
    {
        session()->forget('commentFormData');
        return back()->with('success', 'Your saved information has been deleted.');
    }


    public function viewUser()
    {
        $comment = CoomentModel::all();
        $comments = compact('comment');
        return view('blog-single')->with($comments);
    }

    public function storeReply(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required',
        ]);
    
        $comment = CoomentModel::findOrFail($id);
        $comment->replies()->create([
            'reply' => $request->input('reply'),
        ]);
    
        return back()->with('success', 'Your reply has been submitted successfully.');
    }
}
