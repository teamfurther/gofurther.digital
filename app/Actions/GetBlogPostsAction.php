<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class GetBlogPostsAction
{
    protected Arr $arr;
    protected GetBlogPathAction $getBlogPathAction;

    public function __construct(Arr $arr, GetBlogPathAction $getBlogPathAction)
    {
        $this->arr = $arr;
        $this->getBlogPathAction = $getBlogPathAction;
    }

    /**
     * @return array<string>
     */
    public function execute(): array
    {
        $posts = $this->arr->pluck(config('blog.posts'), getLang());

        foreach ($posts as $key => $post) {
            $posts[$key]['path'] = $this->getBlogPathAction->execute($post['slug'], 'excerpts');
        }

        return $posts;
    }
}
