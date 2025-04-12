<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        Comment::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'content' => $request->content,
        ]);
        return back();
    }
}
