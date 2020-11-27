<?php

namespace App\Http\Controllers;

use App\Actions\GetBlogPostsByTagAction;
use App\Actions\GetBlogTagAction;
use Illuminate\View\View;

class BlogTagsController
{
    public function show(
        GetBlogPostsByTagAction $getBlogPostsByTagAction,
        GetBlogTagAction $getBlogTagAction,
        string $tagSlug
    ): View
    {
        $posts = $getBlogPostsByTagAction->execute($tagSlug);
        $tag = $getBlogTagAction->execute($tagSlug);

        if (!$posts || !$tag) {
            abort(404);
        }

        return view(getLang() . '.blog.tags.show')->with([
            'posts' => $posts,
            'tag' => $tag,
        ]);
    }
}
