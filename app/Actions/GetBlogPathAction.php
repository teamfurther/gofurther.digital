<?php

namespace App\Actions;

use Illuminate\Support\Arr;

class GetBlogPathAction
{
    protected Arr $arr;

    public function __construct(Arr $arr)
    {
        $this->arr = $arr;
    }

    /**
     * @return array<string>
     */
    public function execute(string $slug, string $type = 'posts'): string
    {
        $search = glob(resource_path() . '/views/' . getLang() . '/blog/' . $type . '/*/' . $slug . '.blade.php');

        if ($search) {
            $fullpath = explode('/', $search[0]);

            return array_slice($fullpath, -2, 1)[0];
        }

        throw new \ErrorException('View not found for blog post ' . $slug . '.');
    }
}
