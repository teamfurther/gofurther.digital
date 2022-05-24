<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class GetBlogPostsByTagAction
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
    public function execute(string $tagSlug): array
    {
        $tagged = $this->arr->where(config('blog.posts'), function ($value) use ($tagSlug) {
            return array_key_exists($tagSlug, $value[getLang()]['tags']);
        });

        $posts = $this->arr->pluck($tagged, getLang());

        foreach ($posts as $key => $post) {
            $posts[$key]['path'] = $this->getBlogPathAction->execute($post['slug'], 'excerpts');
        }

        return $posts;
    }
}
