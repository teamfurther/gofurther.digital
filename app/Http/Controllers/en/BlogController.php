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
        if (!view()->exists(getLang() . '.blog.posts.' . $slug)) {
            abort(404);
        }

        return view(getLang() . '.blog.view')->with([
            'slug' => $slug
        ]);
    }

}
