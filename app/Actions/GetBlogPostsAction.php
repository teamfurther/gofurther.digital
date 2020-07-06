<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class GetBlogPostsAction
{
    protected Arr $arr;

    public function __construct(Arr $arr)
    {
        $this->arr = $arr;
    }

    /**
     * @return array<string>
     */
    public function execute(): array
    {
        return $this->arr->pluck(config('blog.posts'), getLang());
    }
}
