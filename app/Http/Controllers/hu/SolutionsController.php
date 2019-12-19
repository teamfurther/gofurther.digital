<?php

namespace App\Http\Controllers\HU;

use App\Controller;

class SolutionsController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(getLang() . '.solutions.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function accounting()
    {
        return view(getLang() . '.solutions.pages.accounting');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function chronos()
    {
        return view(getLang() . '.solutions.pages.chronos');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function communication()
    {
        return view(getLang() . '.solutions.pages.communication');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function crm()
    {
        return view(getLang() . '.solutions.pages.crm');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dms()
    {
        return view(getLang() . '.solutions.pages.dms');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ecommerce()
    {
        return view(getLang() . '.solutions.pages.ecommerce');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function hr()
    {
        return view(getLang() . '.solutions.pages.hr');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function landing()
    {
        return view(getLang() . '.solutions.pages.landing');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mobile()
    {
        return view(getLang() . '.solutions.pages.mobile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mvp()
    {
        return view(getLang() . '.solutions.pages.mvp');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function plm()
    {
        return view(getLang() . '.solutions.pages.plm');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        return view(getLang() . '.solutions.pages.projects');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function purchase()
    {
        return view(getLang() . '.solutions.pages.purchase');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales()
    {
        return view(getLang() . '.solutions.pages.sales');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function seo()
    {
        return view(getLang() . '.solutions.pages.seo');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function timeTracking()
    {
        return view(getLang() . '.solutions.pages.time-tracking');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function wiki()
    {
        return view(getLang() . '.solutions.pages.wiki');
    }

}
