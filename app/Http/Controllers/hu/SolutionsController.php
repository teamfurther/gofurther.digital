<?php

namespace App\Http\Controllers\HU;

use App\Controller;

class SolutionsController extends Controller
{

    public function index()
    {
        return view(getLang() . '.solutions.index');
    }

    public function accounting()
    {
        return view(getLang() . '.solutions.pages.accounting');
    }

    public function chronos()
    {
        return view(getLang() . '.solutions.pages.chronos');
    }

    public function communication()
    {
        return view(getLang() . '.solutions.pages.communication');
    }

    public function crm()
    {
        return view(getLang() . '.solutions.pages.crm');
    }

    public function dms()
    {
        return view(getLang() . '.solutions.pages.dms');
    }

    public function ecommerce()
    {
        return view(getLang() . '.solutions.pages.ecommerce');
    }

    public function hr()
    {
        return view(getLang() . '.solutions.pages.hr');
    }

    public function landing()
    {
        return view(getLang() . '.solutions.pages.landing');
    }

    public function mobile()
    {
        return view(getLang() . '.solutions.pages.mobile');
    }

    public function mvp()
    {
        return view(getLang() . '.solutions.pages.mvp');
    }

    public function plm()
    {
        return view(getLang() . '.solutions.pages.plm');
    }

    public function projects()
    {
        return view(getLang() . '.solutions.pages.projects');
    }

    public function purchase()
    {
        return view(getLang() . '.solutions.pages.purchase');
    }

    public function sales()
    {
        return view(getLang() . '.solutions.pages.sales');
    }

    public function seo()
    {
        return view(getLang() . '.solutions.pages.seo');
    }

    public function timeTracking()
    {
        return view(getLang() . '.solutions.pages.time-tracking');
    }

    public function wiki()
    {
        return view(getLang() . '.solutions.pages.wiki');
    }

}
