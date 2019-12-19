<?php

namespace App\Http\Controllers\HU;

use App\Controller;

class SoftwareQuestionnaireController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view(getLang() . '.software-questionnaire.view');
    }

}
