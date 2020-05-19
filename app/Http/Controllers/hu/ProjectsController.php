<?php

namespace App\Http\Controllers\HU;

use App\Controller;

class ProjectsController extends Controller
{

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
            'slug' => $slug,
        ]);
    }

}
