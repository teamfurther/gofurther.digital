<?php

namespace App\Http\Controllers\EN;

use App\Controller;
use App\Http\Requests;

class BlogController extends Controller
{

    public function index()
    {
        return view(getLang() . '.blog.index');
    }

    public function view($slug)
    {
        return view(getLang() . '.blog.view')->with([
            'slug' => $slug
        ]);
    }

}
