<?php

namespace App\Actions;

use Illuminate\Cache\CacheManager;
use Illuminate\Support\Str;
use Spatie\Browsershot\Browsershot;

class GenerateCoverImageAction
{
    private $coverHeight = 630;
    private $coverWidth = 1200;

    protected CacheManager $cache;
    protected Browsershot $browsershot;

    public function __construct(Browsershot $browsershot, CacheManager $cache, Str $str)
    {
        $this->browsershot = $browsershot;
        $this->cache = $cache;
        $this->str = $str;
    }

    /**
     * @return void
     */
    public function execute(string $title): string
    {
        $key = base64_encode($this->str->ascii($title));

        return $this->cache->remember('cover-image.' . $key, 365 * 24 * 60, function () use ($title) {
            $imageSrc = asset('img/blog-' . mt_rand(1, 10) . '.jpg');

            $html = <<<HTML
            <div style="background: url($imageSrc) bottom center / cover no-repeat; height: {$this->coverHeight}px; width: {$this->coverWidth}px;">
                <div style="background-color: rgba(0, 0, 0, .8); height: 100%; position: relative; width: 100%;">
                    <h1 style="color: #ffffff; font: 700 48px/1.2 Kanit, Helvetica, sans-serif; left: 100px; max-width: 800px; position: absolute; text-transform: uppercase; top: 50px;">$title</h1>
                    <div style="background-color: #ffffff; bottom: 65px; height: 6px; left: 100px; position: absolute; width: 300px;"></div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAAAyCAYAAAAOX8ZtAAAC2UlEQVRoge2aMWsUURSFv2uIiBBBCxVsLNwEiUG0SKKF2EYbW5uUdoY0IkJAEISAYDClP0AstYmFhYKFiYigokIiglgYC0GIEIjisXjZJcad2Xkv5M2bYb9us/dy7zucx+QwawQgyYDnwEhIf2QWgFNmJt/GHYEDx6mGMOD2HA9pNN8GSX3AInAwZGBJLAP9Zrbi0xTinCmqJQy4fad8m7ycI6kBvAN6fQclwC9g0MyWijb4OmeGagoDbu8Zn4bCzpE0Bsz5bpQg58zsUZHCQuJI2gm8Bfq3slUiLAJDZrbWqbDotZqgHsKAO8dEkcKOzpF0AFgC+ra4VEqsAA0z+5ZXVMQ509RLGHDnme5UlOscScPAfKe6iiJg1MxeZBVkOmc9P81ST2HAnWt2/ZxtybtWVcpPoeTmrraqVTQ/hZKZu7KcU8X8FEpm7vrPORXPT6G0zV3tnFPl/BRK29z1j3NqlJ9COW9mrfO3xKlZfgplCTjWzF0br1Wd8lMoDWCy+cGgtvkplBXco3256Zw65qdQWrnLJI3gXrPUNSaEMmqSFoDhsjdJkMxA2qVLly7bQdJPKEn3gNORx06a2YPIM/2QNKb4vJLUSg1JOkdSLy7nDUQefcbMnjU/hP4EZbu5THxh7m8UBhJ0jqT9uJy3J+LYVWDAzL5s/GOKzrlJXGEApjcLA4k5R9JJ4CVx9/oMHDWz1c1fJOOcEt+TXWknTFJIuljCo/tp3k5JXCtJu3HvyQ5FHPsHOGFmb7IKUrlW14grDMDdPGEgAedIOgx8AHZFHPsDOGJm3/OKUnDOLeIKA3C9kzBQsnMknQWeRB77HjhuZr87FZbmHEk9uEd3bCaLCAPlXqtLwFDkmQ/N7HHR4lKulaS9wEdgX8Sxa7j/hD8VbSjLOTeIKwzAbR9hoATnSBoEXgM9Ecd+xb3F/OnTVIZz7hBXGICrvsJER9KFEvLTvHJ+FJnHX9ZpGAbOgUUZAAAAAElFTkSuQmCC" style="bottom: 50px; position: absolute; right: 50px;" />
                </div>
            </div>
        HTML;

            return $this->browsershot
                ->html($html)
                ->windowSize($this->coverWidth, $this->coverHeight)
                ->base64Screenshot();
        });
    }
}
