<?php

namespace App\Http\Controllers\HU;

use App\Controller;
use App\Services\ProjectsService;

class ProjectsController extends Controller
{
    /**
     * Reference to service
     * which will be injected.
     *
     * @var ProjectsService
     */
    protected $projectsService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProjectsService $projectsService)
    {
        $this->projectsService = $projectsService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(getLang() . '.projects/index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $slug)
    {
        return view(getLang() . '.projects.show')->with([
            'bannerSlug' => $this->projectsService->getBannerSlug($slug),
            'slug' => $slug,
        ]);
    }

}
