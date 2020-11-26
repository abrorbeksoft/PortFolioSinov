<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function update()
    {
        return view('admin.update');
    }

    public function add()
    {
        return view('admin.add');
    }


}
