<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatRequest;
use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcomments = Comment::paginate(3);
        return view('comments', compact('allcomments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-comments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidatRequest $request)
    {
        
        $comment = new Comment;

        $comment->title = $request->input('title');
        $comment->message = $request->input('message');

        $comment->save();
        return redirect()->route('comments.index')->with('success', 'сообщение добавлено');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $comments = Comment::find($id);
        
        // return view('comment-show', compact('comments'));
        return view('comment-show',['el'=> Comment::find($id)]);
        // return view('comment-show',['el'=> Comment::find($comment)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('comment-edit',['el'=> Comment::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidatRequest $request, string $id)
    {
        $comment = Comment::find($id);

        $comment->title = $request->input('title');
        $comment->message = $request->input('message');

        $comment->save();
        return redirect()->route('comments.index',$id)->with('success', 'сообщение update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $id->delete();
        // $comment=Comment::find($id);
        // $comment->toQuery()->delete();
        // $com->delete();
        // return redirect()->route('comments.index')->with('success','message delete');
        
        
    }
}
