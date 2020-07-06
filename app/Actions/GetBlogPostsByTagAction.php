<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class GetBlogPostsByTagAction
{
    protected Arr $arr;

    public function __construct(Arr $arr)
    {
        $this->arr = $arr;
    }

    /**
     * @return array<string>
     */
    public function execute(string $tagSlug): array
    {
        $tagged = $this->arr->where(config('blog.posts'), function ($value) use ($tagSlug) {
            return array_key_exists($tagSlug, $value[getLang()]['tags']);
        });

        return $this->arr->pluck($tagged, getLang());
    }
}
