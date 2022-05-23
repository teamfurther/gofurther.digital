<?php

namespace App\Http\Controllers;

use App\Actions\GetBlogPathAction;
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

    public function show(string $slug, GetBlogPathAction $getBlogPathAction): View
    {
        $path = $getBlogPathAction->execute($slug);

        if (!view()->exists(getLang() . '.blog.posts.' . $path . '.' . $slug)) {
            abort(404);
        }

        return view(getLang() . '.blog.show')->with([
            'path' => $path,
            'slug' => $slug,
        ]);
    }
}
