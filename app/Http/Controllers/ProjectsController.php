<?php

namespace App\Http\Controllers;

use App\Actions\GetRandomBannerAction;
use Illuminate\View\View;
use Illuminate\Routing\Controller;

class ProjectsController extends Controller
{
    protected GetRandomBannerAction $getRandomBannerAction;

    public function __construct(GetRandomBannerAction $getRandomBannerAction)
    {
        $this->getRandomBannerAction = $getRandomBannerAction;
    }

    public function index(): View
    {
        return view(getLang() . '.projects/index');
    }

    public function show(string $slug): View
    {
        return view(getLang() . '.projects.show')->with([
            'bannerSlug' => $this->getRandomBannerAction->execute($slug),
            'slug' => $slug,
        ]);
    }
}
