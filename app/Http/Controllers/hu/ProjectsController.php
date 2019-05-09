<?php

namespace App\Http\Controllers\HU;

use App\Controller;
use App\Http\Requests;

class ProjectsController extends Controller
{

    public function index()
    {
        return view(getLang() . '.projects/index');
    }

    public function view($slug)
    {
        return view(getLang() . '.projects.view')->with([
            'slug' => $slug
        ]);
    }

}
