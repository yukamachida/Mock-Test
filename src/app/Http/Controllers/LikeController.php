<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        Like::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);
        return back(); 
    }

    public function destroy($id)
    {
        $like = Like::findOrFail($id);

        if ($like->user_id ===Auth::id()) {
            $like->delete();
        }
        return back();
    }

    

}
