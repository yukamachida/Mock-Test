<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Category;
use App\Models\Comment;


class ProductController extends Controller
{
    public function create()
    {
        return view('item.create');
    }

    public function store(ExhibitionRequest $request)
    {
    }
}
