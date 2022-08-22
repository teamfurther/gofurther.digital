<?php

namespace App\Http\Controllers;

use App\Actions\CheckBlogSlugExistsAction;
use App\Actions\GetRandomBannerAction;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    protected CheckBlogSlugExistsAction $checkBlogSlugExistsAction;
    protected GetRandomBannerAction $getRandomBannerAction;

    public function __construct(
        CheckBlogSlugExistsAction $checkBlogSlugExistsAction,
        GetRandomBannerAction $getRandomBannerAction
    )
    {
        $this->checkBlogSlugExistsAction = $checkBlogSlugExistsAction;
        $this->getRandomBannerAction = $getRandomBannerAction;
    }

    public function index(): View
    {
        return view(getLang() . '.projects/index');
    }

    public function show(string $slug): View
    {
        if (!$this->checkBlogSlugExistsAction->execute($slug)) {
            abort(404);
        }

        return view(getLang() . '.projects.show')->with([
            'bannerSlug' => $this->getRandomBannerAction->execute($slug),
            'slug' => $slug,
        ]);
    }
}
