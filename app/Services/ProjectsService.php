<?php

namespace App\Services;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;

class ProjectsService
{
    /**
     * Reference to arr object
     * which will be injected.
     *
     * @var Arr
     */
    protected $arr;

    /**
     * Reference to file object
     * which will be injected.
     *
     * @var Filesystem
     */
    protected $file;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct(Arr $arr, Filesystem $file)
    {
        $this->arr = $arr;
        $this->file = $file;
    }

    /**
     * Get slug for banner to be displayed
     * at the end of the project page.
     */
    public function getBannerSlug(string $slug): string
    {
        $bannersPath = resource_path() . '/views/' . getLang() . '/projects/banners';
        $files = $this->file->allFiles($bannersPath);
        do {
            $banner = $this->arr::random($files);
            $bannerSlug = substr($banner->getFilename(), 0, -10);
        } while ($bannerSlug === $slug);

        return $bannerSlug;
    }
}
