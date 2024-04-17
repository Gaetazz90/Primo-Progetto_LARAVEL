<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome () {
        $articles = Article::orderBy('created_at', 'DESC')->take(3)->get();
        return view('welcome_page', compact('articles'));
    }

    public function user () {
        return view('user_page');
    }
}
