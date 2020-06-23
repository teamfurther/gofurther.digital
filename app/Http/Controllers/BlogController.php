<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BlogController
{
    public function index(): View
    {
        return view(getLang() . '.blog.index');
    }

    public function show(string $slug): View
    {
        if (!view()->exists(getLang() . '.blog.posts.' . $slug)) {
            abort(404);
        }

        return view(getLang() . '.blog.show')->with([
            'slug' => $slug,
        ]);
    }
}
