<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class CheckBlogSlugExistsAction
{
    public function execute(string $slug): bool
    {
        $search = glob(resource_path() . '/views/' . getLang() . '/blog/posts/*/' . $slug . '.blade.php');

        return (bool) $search;
    }
}
