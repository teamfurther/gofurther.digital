<?php

namespace App\Http\Controllers\HU;

use App\Controller;

class BlogController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(getLang() . '.blog.index');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
