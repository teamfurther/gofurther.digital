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
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($slug)
    {
        return view(getLang() . '.projects.view')->with([
            'slug' => $slug
        ]);
    }

}
