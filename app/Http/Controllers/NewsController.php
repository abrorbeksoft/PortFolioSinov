<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('getPosts');
    }

    public function getNews()
    {
        return view('news.news');
    }


    public function getPosts()
    {
        return view('news.posts');
    }

}
