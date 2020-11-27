<?php

namespace App\Http\Controllers;

use App\Actions\GetBlogPostsAction;
use Illuminate\View\View;

class BlogController
{
    public function index(GetBlogPostsAction $getBlogPostsAction): View
    {
        $posts = $getBlogPostsAction->execute();

        if (!$posts) {
            abort(404);
        }

        return view(getLang() . '.blog.index')->with([
            'posts' => $posts,
        ]);
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
