<?php

namespace App\Actions;

class GetWebinarBySlugAction
{
    public function execute($slug): ?string
    {
        return key(array_filter(config('webinars'), function ($value) use ($slug) {
            return $value['slug'] === $slug;
        }));
    }
}
