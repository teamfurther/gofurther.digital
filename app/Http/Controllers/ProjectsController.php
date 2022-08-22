<?php

namespace App\Http\Controllers;

use App\Actions\GetRandomBannerAction;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function index(): View
    {
        return view(getLang() . '.projects/index');
    }

    public function show(
        string $slug,
        GetRandomBannerAction $getRandomBannerAction
    ): View
    {
        if (!view()->exists(getLang() . '.projects.projects.' . $slug)) {
            abort(404);
        }

        return view(getLang() . '.projects.show')->with([
            'bannerSlug' => $getRandomBannerAction->execute($slug),
            'slug' => $slug,
        ]);
    }
}
