<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class GetBlogTagAction
{
    protected Arr $arr;

    public function __construct(Arr $arr)
    {
        $this->arr = $arr;
    }

    /**
     * @return array<string>
     */
    public function execute(string $tagSlug): object
    {
        $lang = getLang();

        return (object) $this->arr->first(config('blog.tags'), function ($value) use ($lang, $tagSlug) {
            return $value[$lang]['slug'] === $tagSlug;
        })[$lang];
    }
}
