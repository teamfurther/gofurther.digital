<?php

namespace App\Actions;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;

class GetRandomBannerAction
{
    protected Arr $arr;

    protected Filesystem $file;

    public function __construct(Arr $arr, Filesystem $file)
    {
        $this->arr = $arr;
        $this->file = $file;
    }

    public function execute(string $exceptProjectSlug): string
    {
        $bannersPath = resource_path() . '/views/' . getLang() . '/projects/banners';
        $files = $this->file->allFiles($bannersPath);

        do {
            $banner = $this->arr::random($files);
            $bannerSlug = substr($banner->getFilename(), 0, -10);
        } while ($bannerSlug === $exceptProjectSlug);

        return $bannerSlug;
    }
}
